<div class="row">

    <div id="tag-list" class="col-xs-1">
        @include('sensitiveData/angular/tags')
    </div>

    <div class="col-xs-6">
        @include('sensitiveData/angular/sensitive-data')
    </div>

    <div class="col-xs-5">
        <div class="col-xs-12">
            <button class="btn btn-success input-medium pull-right js-add-new">Add New</button>
        </div>

        <div class="js-sensitive-data-tabs hidden col-xs-12">
            <!-- Nav tabs -->
            <button type="button" class="close js-close-sensitive-data"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

            <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#edit-sensitive-data" role="tab" data-toggle="tab" id="edit-sensitive-data-tab">Edit</a></li>
              <li><a href="#markdown-sensitive-data" role="tab" data-toggle="tab" id="markdown-sensitive-data-tab">Markdown</a></li>
              <li><a href="#raw-sensitive-data" role="tab" data-toggle="tab" id="raw-sensitive-data-tab">Raw</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="edit-sensitive-data">
                    <div class="row js-new-form">
                        <div class="col-xs-12">
                            {{ Form::open(array('method' => 'post', 'files' => true, 'id' => 'qq-form')) }}
                                {{ Form::input('hidden', 'id', null, array('class' => 'js-form-id')) }}
                                <div class="row">
                                    <div class="js-alert-box col-xs-12"></div>
                                </div>
                                <div class="form-group">
                                    {{ Form::input('text', 'name', null, array('class' => 'form-control js-form-name', 'placeholder' => 'Name'))}}
                                    {{ Form::errorMsg($validator, 'name')}}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('value', null, array('class' => 'form-control js-form-value', 'placeholder' => 'Sensitive data', 'rows' => '15'))}}
                                    {{ Form::errorMsg($validator, 'value')}}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('tags', 'Tags:') }}
                                    {{ Form::select('tags[]', array(), null,
                                            array(
                                                'multiple' => 'true',
                                                'id' => 'tags'
                                            )
                                    )}}
                                    {{ Form::errorMsg($validator, 'tags')}}
                                </div>
                                <div class="form-group">
                                    <p>
                                        <a href="#" class="js-file-link"></a>
                                    </p>
                                </div>
                                <div id="form-fineupload"></div>
                                <div class="form-group js-add-new-buttons">
                                    <input type="submit" class="btn btn-primary input-medium pull-right js-add-new-send" value="Send" />
                                    <input type="reset" class="btn btn-warning input-medium pull-right js-add-new-cancel" />
                                    <i class="fa fa-spinner fa-spin hide pull-right"></i>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="markdown-sensitive-data">
                    <div class="row js-markdown-placeholder">
                        <div class="col-xs-12">
                            <h2 class="js-markdown-title"></h2>
                            <div class="js-markdown-body"></div>
                            <a href="#" class="js-file-link"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="raw-sensitive-data">
                    <div class="row js-raw-placeholder">
                        <div class="col-xs-12">
                            <h2 class="js-raw-title"></h2>
                            <div>
                                <pre class="js-raw-body"></pre>
                            </div>
                            <a href="#" class="js-file-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade js-decrypt-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Decrypt data</h4>
      </div>
      <div class="modal-body">
          <form>
            <input type="hidden" name="id"/>
            <input type="password" name="password" placeholder="password" class="form-control"/>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger js-submit" disabled="disabled">Decrypt Now</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->