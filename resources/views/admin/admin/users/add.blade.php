@extends('admin.default')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h5 class="box-title"><i class="fa fa-user"></i> 添加管理员</h5>
                <div class="pull-right">
                    <a class="btn-default btn-sm" href="{{URL::route('admin/users')}}"><i class="fa fa-reply"></i> 返回</a>
                </div>
            </div>
            <div class="box-body">
                <form action="{{URL::route('admin/users/add')}}" method="post" id="form" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label">手机号码</label>
                        <input type="text" name="telephone" id="telephone" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">真实姓名</label>
                        <input type="text" placeholder="" name="truename" id="truename" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">密码</label>
                        <input type="text" class="form-control" name="password" id="password" value="123456" /> 
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="confirm" value="1" class="minimal" checked/>
                            激活</label>
                    </div> 

                    <div class="form-group">
                        <label class="control-label">权限</label>
                        <select multiple name="roles[]" id="role" class="form-control select2">
                            @foreach ($roles as $k => $v)
                            <option value="{{$k}}">{{$v}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>        
</div>
@stop

@section('script')
<script>
    var rule = {
        telephone: {
            required: true,
            minlength: 11
        },
        truename: {
            required: true,
        },
        password: {
            required: true,
            minlength: 6
        },
    };
    xy_ajaxform(rule);
</script>
@stop