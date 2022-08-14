@include('layouts.partials.head')

<!-- /.modal compose message -->
<div class="modal show" id="modalCompose">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-envelope"></span> Compose Message</h4>
            </div>
            <div class="modal-body">
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2" for="inputTo">
                            Name:
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTo" name="name"
                                placeholder="Title for your photo...">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2" for="inputSubject">
                            File:
                        </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control w-full" id="inputSubject" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2" for="inputSubject">
                            Category:
                        </label>
                        <div class="col-sm-10">
                            <select>
                                <option value="">Select a category...</option>
                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <a href="{{ route('photos.index') }}" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</a>

                <button type="submit" class="btn btn-primary ">
                    Upload
                </button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal compose message -->
@include('layouts.partials.scripts')
