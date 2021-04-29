@extends('home.layouts.app')

@section('title', __('Channels'))
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<style>
    .dataTables_length{
        margin-bottom: 15px;
    }
    th, td{
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="page-wrapper page-contact">
    {{-- Block contact --}}
    <div class="grid-contact" id="grid-hero">
        <div class="container">
            <div class="grid-head" style="text-align: center">
                <h2 class="title" data-cms="{{app()->getLocale()}}-channel-index-4">Danh sách kênh!</h2>
                <div class="sapo">
                    <p data-cms="{{app()->getLocale()}}-channel-index-6">Vui lòng liên hệ với chúng tôi qua email hoặc hotline.</p>
                </div>
            </div>
            <div class="row" style="background-color:white; padding: 15px">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="container">
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th>{{$values[0][0]}}</th>
                                    <th>{{$values[0][1]}}</th>
                                    <th>{{$values[0][2]}}</th>
                                    <th>{{$values[0][3]}}</th>
                                    <th>{{$values[0][4]}}</th>
                                    <th>Liên hệ</th>
                                  </tr>
                            </thead>

                            <tbody>
                                @for ($i = 1; $i < count($values); $i++)
                                    <tr>
                                        <td>{{$values[$i][0]}}</td>
                                        <td>
                                            <a href="{{$values[$i][1]}}" title="{{$values[$i][1]}}" alt="{{$values[$i][1]}}" target="_blank"> Xem kênh </a>
                                            <input value="{{$values[$i][1]}}" type="text" style="display: none;" id="link_{{$i}}"/>
                                            <button style="padding-left:10px" onclick="copy('link_{{$i}}')">Copy</button>
                                        </td>
                                        <td>{{$values[$i][2]}}</td>
                                        <td>{{$values[$i][3]}}</td>
                                        <td style="color: {{$values[$i][4]=='Đã bán'?'red':'black'}}">{{$values[$i][4]}}</td>
                                        <td>
                                            @if ($values[$i][4]!='Đã bán')
                                            <button style="background-color: #8CE78C; border: 1px solid #8CE78C;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                            0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;">Đặt mua</button>
                                            @endif
                                            </td>
                                    </tr>
                                @endfor
                            </tbody>
                          </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Block action --}}
    @include('home.includes.consultation')
</div>
@section("js")
<script>

    function copy(id) {
        /* Get the text field */
        var copyText = document.getElementById(id);

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");
    }

    $(document).ready( function () {
        $('#customers').DataTable({
            'pageLength': 25,
            "order": [[ 0, "desc" ]],
            "language": {
                "sProcessing":    "Đang tìm kiếm...",
                "sLengthMenu":    "Hiển thị _MENU_ kênh",
                "sZeroRecords":   "No se encontraron resultados",
                "sEmptyTable":    "Ningún dato disponible en esta tabla",
                "sInfo":          "Bắt đầu từ kênh _START_ đến _END_ trong tổng _TOTAL_ kênh",
                "sInfoEmpty":     "Không có kênh nào",
                "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":   "",
                "sSearch":        "Tìm kiếm:",
                "sUrl":           "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Về đầu",
                    "sLast":    "Về cuối",
                    "sNext":    "Tiếp",
                    "sPrevious": "Lùi"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    } );

</script>
@endsection
