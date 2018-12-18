@extends('admin.index')
@section('title',$title)
@section('content')
<script src='/home/js/jquery-1.8.3.min.js'></script>
   <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i>订单浏览</span>
        </div>
        <div class="mws-panel-body no-padding">
            <table class="mws-datatable-fn mws-table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>用户名</th>
                    <th>商品数量</th>
                    <th>金额</th>
                    <th>收货人</th>
                    <th>联系电话</th>
                    <th>收货地址</th>
                    <th>买家留言</th>
                    <th>订单状态</th>
                    <th>订单时间</th>
                    <th>发货</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order as $v)
                    <tr>
                        <td id="{{$v['id']}}">{{$v['id']}}</td>
                         <td>
                          @if($v['user_id'] == $user['id'])
                                {{$user['username']}}
                            @endif
                        </td>
                        <td>{{$v['count']}}</td>
                        <td>{{$v['sum']}}</td>
                        <td>{{$v['rec']}}</td>
                        <td>{{$v['tel']}}</td>
                        <td>{{$v['addr']}}</td>
                        <td>{{$v['umsg']}}</td>
                        <td>
                            @if($v->status == '1')
                            <font color="#FF0000">未发货</font>
                            @elseif($v->status == '2')
                             <font color="#FF0000">已发货</font>
                            @elseif($v->status == '3')
                             <font color="#FF0000">已完成</font>
                            @endif
                        </td>
                        <td>{{date('Y-m-d H:i:s',$v['create_time'])}}</td>
                        <td>
                            <button ><span id="sumb" class="icol-delivery"></span></button>
                            <script type="text/javascript">

                            $('#sumb').click(function(){
                                var oid = $(this).parents('tr').attr('id');
                                //console.log(oid);
                                $.get('admin/orderfh',{oid:oid},function(data){
                                            //console.log(data);
                                })  
                            })
                        </script>
                        </td>
                     
                        <td>
                            <span class="btn-group">
                                <a href="/admin/order/{{$v['id']}}/edit" class="btn btn-small"><i class="icon-pencil"></i></a>

                            <form action="/admin/order/{{$v['id']}}" method='post' style='display:inline'>
                                {{csrf_field()}}
                                
                                {{method_field("DELETE")}}
                                <button class='btn btn-small'><i class="icon-trash"></i></button>

                            </form>
                    @endforeach

                            </span>
                        </td>

                    </tr>
  
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panels End -->
@endsection