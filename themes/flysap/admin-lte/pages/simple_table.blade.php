@extends('themes::layouts.default')

@section('content')

   @yield('header')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Responsive Hover Table</h3>
                        <div class="box-tools">
                            <div class="input-group" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search" />
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">

                        <table class="table table-hover">
                            <tr>
                                @foreach($fields as $field)
                                    <th>{{$field}}</th>
                                @endforeach
                            </tr>

                            @foreach($data as $row)
                                <tr>
                                    @foreach($row as $value)
                                        @if(is_array($value))
                                            <?php $value = implode(' ', $value); ?>
                                        @endif

                                        <td>{{$value}}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </table>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->

   @yield('footer')

@endsection