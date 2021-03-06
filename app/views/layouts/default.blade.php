<!DOCTYPE html>
<html ng-app="Behigorri">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/fineuploader-dist/dist/fineuploader.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/fontawesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/ng-tags-input/ng-tags-input.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/behigorri.css') }}" />
    <script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/fineuploader-dist/dist/jquery.fineuploader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/angularjs/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/angular-sanitize/angular-sanitize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/showdown/compressed/showdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/angular-markdown-directive/markdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/ng-tags-input/ng-tags-input.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sensitiveData.js') }}"></script>
    <script type="text/template" id="qq-template">
        <div class="qq-uploader-selector qq-uploader">
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span>Drop files here to upload</span>
            </div>
            <div class="qq-upload-button-selector qq-upload-button">
                <div>Select Files</div>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list">
                <li>
                    <div class="qq-progress-bar-container-selector">
                        <div class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <span class="qq-upload-file-selector qq-upload-file"></span>
                    <span class="qq-upload-size-selector qq-upload-size"></span>
                    <a class="qq-upload-cancel-selector qq-upload-cancel" href="#">Cancel</a>
                    <span class="qq-upload-status-text-selector qq-upload-status-text"></span>
                </li>
            </ul>
        </div>
    </script>
    <base href="{{ URL::to('/') }}" />
    <body>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Behigorri PM</a>
                </div>

                @if (Auth::check())
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    {{ Form::open(array(
                        'method' => 'get',
                        'class' => 'navbar-form navbar-left',
                        'role' => 'search',
                        'ng-controller' => 'SensitiveDataSearchController',
                        'ng-submit' => 'submitSearch($event)'
                    ))}}
                        <div class="form-group">
                            {{ Form::input('text', 'query', null,
                                array(
                                    'class' => 'form-control',
                                    'placeholder' => 'Search',
                                    'ng-model' => 'query',
                                    'ng-change' => 'search($event)'
                                )
                            )}}
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    {{ Form::close() }}
                    <ul class="nav navbar-nav navbar-right">
                        <li><span class="navbar-text" id="logged-user">{{ Auth::user()->getAuthIdentifier() }}</span></li>
                        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                @endif
            </div><!-- /.container -->
        </nav>
        <div class="container">
            {{ $content }}
        </div>
    </body>
</html>