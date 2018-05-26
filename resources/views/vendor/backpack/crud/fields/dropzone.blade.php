<div class="form-group col-md-12">
	<div class="dz-message">
		Kéo hình ảnh vào khung hoặc nhấn vào khung để tải lên.
	</div>
	<div class="dropzone sortable dz-clickable sortable">
		<div class="dz-message">
		</div>
	
		@foreach($entry->images as $image)
			<div class="dz-preview" data-id="{{ $image->id }}">
				<img class="dropzone-thumbnail" src={{ asset('uploads/'.$field['disk'].'/'.$image->name) }}>
				<a class="dz-remove" href="javascript:void(0);" data-remove="{{ $image->id }}">Xóa ảnh</a>
			</div>
		@endforeach
	</div>
</div>
	
@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))

	@push('crud_fields_styles')
		<style>
			.sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; overflow: auto;}
			.sortable { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 120px; height: 120px; vertical-align:bottom; text-align: center;}
			.dropzone-thumbnail {
				width: 120px;
				height: 120px;
				cursor: move !important;
			}
			.dropzone {
				width: 100%;
				height: 270px;
			}
		</style>
	@endpush

	@push('crud_fields_scripts')
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="{{ asset('js/dropzone.js') }}"></script>
		<link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">

		<script>
			Dropzone.autoDiscover = false;
			var uploaded = false;

			var dropzone = new Dropzone(".dropzone", {
				url: '{{ $field['uploadRoute'] }}',
				uploadMultiple: true,
				acceptedFiles: '{{ implode(',', $field['mimes']) }}',
				addRemoveLinks: true,
				maxFilesize: {{ $field['filesize'] }},
				parallelUploads: 10,
				dictInvalidFileType: "Bạn không thể tải lên loại file này.",
				dictFileTooBig: "Dung lượng file quá lớn (@{{filesize}}MiB). Dung lượng tối đa: @{{maxFilesize}}MiB.",
				sending: function(file, xhr, formData) {

					formData.append("_token", $('[name=_token').val());
					formData.append("id", {{ $entry->id }});
				},
				error: function(file, response) {

					$(file.previewElement).find('.dz-error-message').remove();
					$(file.previewElement).remove();

					$(function() {
						new PNotify({
							title: 'Xảy ra lỗi khi tải lên file: ' + file.name,
							text: response,
							type: 'error',
							icon: false
						});
					});
				},
				success : function(file, images) {

					$('.dropzone').empty();
					$.each(images, function(index, val) {
						$('.dropzone').append('<div class="dz-preview" data-id="' + val.id + '"><img class="dropzone-thumbnail" src="{{ $field['simplePathUrl'] }}/' + val.name + '" /><a class="dz-remove" href="javascript:void(0);" data-remove="' + val.id + '">Xóa ảnh</a></div>');
					});

					$(function(){
							new PNotify({
							title: false,
							text: 'Hình ảnh được tải lên thành công!',
							type: 'success',
							icon: false
							});
					});
				}
			});

			// Reorder images
			$(".dropzone").sortable({
				items: '.dz-preview',
				cursor: 'move',
				opacity: 0.5,
				containment: '.dropzone',
				distance: 20,
				scroll: true,
				tolerance: 'pointer',
				stop: function (event, ui) {
					var idsOrder = [];

					$('.dz-preview').each(function() {
						idsOrder.push($(this).data('id'));
					});

					$.ajax({
						url: '{{ $field['reorderRoute'] }}',
						type: 'POST',
						data: {
							order: idsOrder
						}
					})
					.done(function(resp) {
						console.log(resp);
					});
				}
			});

			// Delete image
			$(document).on('click', '.dz-remove', function () {
				
				var id = $(this).data('remove');

				$.ajax({
					url: '{{ $field['deleteRoute'] }}',
					type: 'POST',
					data: {
						id: id
					}
				})
				.done(function(status) {
					var notification_type;

					if (status.success) {
						notification_type = 'success';
						$('div.dz-preview[data-id="' + id + '"]').remove();
					} else {
						notification_type = 'error';
					}

					$(function() {
							new PNotify({
							text: status.message,
							type: notification_type,
							icon: false
							});
					});
				});
			});
		</script>
	@endpush
@endif