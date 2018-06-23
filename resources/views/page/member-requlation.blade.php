<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 white-text">
        @if (null != $yakiMemberPolicy)
            {!! nl2br($yakiMemberPolicy->content) !!}
            <br/>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Hạng thành viên</th>
                        <th>Điểm tích lũy</th>
                        <th>Ưu đãi (%)</th>
                    </tr>
                </thead>
                <tbody>

                @if (0 < count($memberTypes))
                    <?php $idx = 0; ?>
                    @foreach($memberTypes as $memberType)
                        <?php $idx++; ?>
                        <tr>
                            <th>{{ $memberType->name }}</th>
                            <th>
                                {{ $memberType->point_from }} ~  
                                @if($idx == count($memberTypes))
                                @else {{ $memberType->point_to }}
                                @endif
                            </th>
                            <th>{{ $memberType->percent_discount }}%</th>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        @else
            Đang cập nhật thông tin...
        @endif
    </div>
    <div class="col-md-3"></div>
</div>