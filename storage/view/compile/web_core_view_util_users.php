<script>
    //只选择一个用户
    var single = "<?php echo $_GET['single']?>";

</script>
<div class="form-group form-horizontal">
    <label for="" class="col-sm-2 control-label">用户名</label>

    <div class="col-sm-10">
        <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-addon btn btn-default" onclick="loadUser($(this).prev().val())">
                <i class="fa fa-search"></i> 搜索
            </span>
        </div>
    </div>
</div>
<table class="table table-hover">
    <thead>
    <tr>
        <th>用户名</th>
        <th>用户组</th>
        <th>说明</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody id="getUsers">
    </tbody>
</table>

<script>
    //加载用户
    function loadUser(username) {
        $.get('?s=core/util/users&loadUser=1&username=' + (username ? username : ''), function (data) {
            var tr = '';
            $(data).each(function (i) {
                tr += '<tr>\
                    <td>' + data[i].username + '</td>\
                    <td><span class="label label-success">' + data[i].name + '</span></td>\
                    <td>' + data[i].remark + '</td>\
                    <td class="text-right">\
                        <button class="btn btn-default" username="' + data[i]['username'] + '" uid="' + data[i].uid + '" onclick="select(this)">选择</button>\
                    </td>\
                    </tr>';
            })
            $("tbody#getUsers").html(tr);
        })
    }
    loadUser();
    //选择或取消用户
    function select(obj) {
        if ($(obj).hasClass('btn-default')) {
            $(obj).attr('class', 'btn btn-primary');
            //选择单一用户时,关闭模态框
            if (single) {
                $("#getSingleUser").modal('hide');
            }
        } else {
            $(obj).attr('class', 'btn btn-default');
        }
    }
</script>