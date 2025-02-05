@extends('admin.layouts.master')
@section('title','All Alumini')
@section('maincontent')
<?php
$data['heading'] = 'Alumni';
$data['title'] = 'Alumni';
?>
@include('admin.layouts.topbar',$data)
<div class="contentbar dashboard-card">
    <div class="row">
        <div class="col-lg-12">
            <div class="card dashboard-card m-b-30">
                <div class="card-header">
                    <h5 class="box-title">{{ __('All Alumni') }}</h5>
                    <div>
                        <div class="widgetbar">
                            @can('alumini.create')
                            <a href="{{route('alumini.create')}}" class="float-right btn btn-primary-rgba mr-2" title="{{ __('Add Alumni') }}"><i
                            class="feather icon-plus mr-2"></i>{{ __('Add Alumni') }}</a>
                            @endcan
                            @can('alumini.delete')
                            <button type="button" class="float-right btn btn-danger-rgba mr-2" data-toggle="modal" data-target="#bulk_delete" title="{{ __('Delete Selected') }}"><i
                                class="feather icon-trash mr-2"></i> {{ __('Delete Selected') }}</button>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="allusertable" class="table table-striped table-bordered">
                            <thead>
                                <tr>

                                    <th>
                                        <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]"
                                        value="all" />
                                        <label for="checkboxAll" class="material-checkbox"></label>#</th>
                                    <th>{{ __('Alumni Name') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0;?>
                                @if(isset($alumini))
                                @foreach($alumini as $key=> $data)
                                <tr>
                                    <td>
                                                     
                                        <input type='checkbox' form='bulk_delete_form' class='check filled-in material-checkbox-input'
                                            name='checked[]' value="{{ $data->id }}" id='checkbox{{ $data->id }}'>
                                        <label for='checkbox{{ $data->id }}' class='material-checkbox'></label>
                                        {{ $key+1 }}
                                    <div id="bulk_delete" class="delete-modal modal fade" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" title="{{ __('Close') }}">&times;</button>
                                                    <div class="delete-icon"></div>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <h4 class="modal-heading">{{ __('Are You Sure') }} ?</h4>
                                                    <p>{{ __('Do you really want to delete selected item ? This process
                                                        cannot be undone') }}.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form id="bulk_delete_form" method="post"
                                                        action="{{ route('alumini.bulk_delete') }}">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="reset" class="btn btn-gray translate-y-3"
                                                            data-dismiss="modal">{{ __('No') }}</button>
                                                        <button type="submit" class="btn btn-danger">{{ __('Yes') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </td> 
                                    <td>{{ $data->user->fname }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-round btn-outline-primary" type="button" id="CustomdropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="{{ __('Settings') }}"><i class="feather icon-more-vertical-"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                                                @can('alumini.edit')
                                                <a class="dropdown-item" href="{{url('alumini/'.$data->id.'/edit')}}" title="{{ __('Edit') }}"><i class="feather icon-edit mr-2"></i>{{ __('Edit') }}</a>
                                                @endcan
                                                @can('alumini.delete')
                                                <a class="dropdown-item btn btn-link" data-toggle="modal" data-target="#delete{{ $data->id }}" title="{{ __('Delete') }}">
                                                    <i class="feather icon-delete mr-2"></i>{{ __("Delete") }}</a>
                                                </a>
                                                @endcan
                                            </div>
                                        </div>
    
                                        <!-- delete Modal start -->
                                        <div class="modal fade bd-example-modal-sm" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleSmallModalLabel">{{ __('Delete') }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="{{ __('Close') }}">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <h4>{{ __('Are You Sure ?')}}</h4>
                                                            <p>{{ __('Do you really want to delete')}} <b></b> ? {{ __('This process cannot be undone.')}}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post" action="{{url('alumini/'.$data->id)}}" class="pull-right">
                                                            {{csrf_field()}}
                                                            {{method_field("DELETE")}}
                                                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">{{ __('No') }}</button>
                                                            <button type="submit" class="btn btn-primary">{{ __('Yes') }}</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- delete Model ended -->
    
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>

@endsection