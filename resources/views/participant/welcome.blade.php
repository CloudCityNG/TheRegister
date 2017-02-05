@extends('template')

@section('content')
    <div class="row">
        <div class="jumbotron" style="text-align: center">
            <h1>ยินดีต้อนรับเข้าสู่ระบบลงทะเบียน</h1>
            <h2>พิธีมหาเทวาภิเษก</h2>
            <br>
            <br>
            <h3>กรุณากรอกลำดับการสั่งจองของท่าน</h3>
            {!! Form::open(['url' => 'welcome/check_order_id', 'class' => 'form-horizontal']) !!}
            <div class="row">
                <div class="col-xs-2 col-xs-offset-2 col-md-1 col-md-offset-4">
                    <div class="form-group">
                        {!! Form::number('order_id_1', null, ['class' => 'form-control input-lg']) !!}
                    </div>
                </div>
                <div class="col-xs-2 col-md-1">
                    <div class="form-group">
                        {!! Form::number('order_id_2', null, ['class' => 'form-control input-lg']) !!}
                    </div>
                </div>
                <div class="col-xs-2 col-md-1">
                    <div class="form-group">
                        {!! Form::number('order_id_3', null, ['class' => 'form-control input-lg']) !!}
                    </div>
                </div>
                <div class="col-xs-2 col-md-1">
                    <div class="form-group">
                        {!! Form::number('order_id_4', null, ['class' => 'form-control input-lg']) !!}
                    </div>
                </div>
            </div>
            {!! Form::submit('Submit', ['class' => 'btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop