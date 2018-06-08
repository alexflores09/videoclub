<div class="row" style="margin-top: 40px">
    <div class="offset-lg-3 offset-md-2 col-lg-6 col-md-8 col-sm-12">
        <div class="card">
            <div class="card-header text-center">
                {{ ($edit)?'Modificar película':'Agregar película' }}
            </div>
            <div class="card-body" style="padding: 30px;">
                <form action="{{url('/catalog/save')}}" method="POST">
                    {{csrf_field()}}
                    @if($edit)
                        {{method_field('PUT')}}
                    @else
                        {{method_field('POST')}}
                    @endif
                    <input type="hidden" name="txtID" value="{{ ($arrMovie)?$arrMovie['id']:0 }}" >
                    <div class="form-group">
                        <label for="txtTitle">Título</label>
                        <input type="text" class="form-control" name="txtTitle" id="txtTitle" required value="{{($arrMovie)?$arrMovie['title']:''}}">
                    </div>
                    <div class="form-group">
                        <label for="txtYear">Año</label>
                        <input type="text" class="form-control" name="txtYear" id="txtYear" required value="{{($arrMovie)?$arrMovie['year']:''}}">
                    </div>
                    <div class="form-group">
                        <label for="txtDirector">Director</label>
                        <input type="text" class="form-control" name="txtDirector" id="txtDirector" required value="{{($arrMovie)?$arrMovie['director']:''}}">
                    </div>
                    <div class="form-group">
                        <label for="txtPoster">Poster</label>
                        <input type="text" class="form-control" name="txtPoster" id="txtPoster" required value="{{($arrMovie)?$arrMovie['poster']:''}}">
                    </div>
                    <div class="form-group">
                        <label for="txtSynopsis">Synopsis</label>
                        <textarea class="form-control" name="txtSynopsis" id="txtSynopsis">{{($arrMovie)?$arrMovie['synopsis']:''}}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="btnSave" class="btn btn-primary" style="padding: 8px 100px;margin-top: 25px;">
                            @if($edit)
                                <i class="far fa-edit"></i>&nbsp;&nbsp;Modificar película
                            @else
                                <i class="fas fa-plus-circle"></i>&nbsp;&nbsp;Agregar película
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



