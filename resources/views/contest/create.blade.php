@extends('layouts.contest.app')

@section('content')





                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title m-t-0">File Upload</h4>
                                <p class="text-muted font-14 m-b-10">
                                    Выберите видео для загрузки
                                </p>
                                <form method="post" action="{{ url('contest/upload') }}" enctype="multipart/form-data" class="form-horizontal ">
                                    {{ csrf_field() }}
                                    <div class="form-group row">

                                        <div class="controls col-9">
                                            <div class="fileupload fileupload-exists" data-provides="fileupload"><input type="hidden" value="" name="">
                                                <button type="button" class="btn btn-gradient btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input type="file" class="btn-secondary" accept="video/*" name="userfile">
                                                </button>
                                                <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                            </div>
                                            <input class="btn btn-gradient btn-file" type="submit" value="Загрузить">
                                        </div>




                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>




@endsection