@extends('template')
@section('page')

<body class="login-page sidebar-collapse">
    @extends('navbar')
    <br><br>
    <h3>Dynamic Dependent</h3>
    <form action="{{ route('getLokasi') }}" method="post" id="getLokasi" name="getLokasi">
    <div class="form-group">
        <div class="col-md-6">
            <select name="provinsi" id="provinsi"
            class="form-control input-lg dynamic" data-dependent="kota">
                <option value="">pilih provinsi</option>
                @foreach($provList as $prov)
                    <option value="{{ $prov->id_prov }}">{{ $prov->nama_prov }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <select name="kota" id="kota"
            class="form-control input-lg dynamic" data-dependent="kec">
                <option value="">pilih kota</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <select name="kec" id="kec"
            class="form-control input-lg dynamic" data-dependent="kel">
                <option value="">pilih kecamatan</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <select name="kel" id="kel"
            class="form-control input-lg">
                <option value="">pilih kelurahan</option>
            </select>
        </div>
    </div>

    {{ csrf_field() }}
    <button type="submit" class="btn btn-info">Submit</button>
    </form>

    <script>
        $('document').ready(function(){
            $('.dynamic').change(function(){
                if($(this).val() != ''){
                    var select = $(this).attr('id');
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('fetch') }}",
                        method: "POST",
                        data: {select:select, value: value, dependent: dependent, _token: _token},
                        success: function(result){
                            $('#'+dependent).html(result);
                            $('#'+dependent).removeAttr('disabled');
                        },
                        beforeSend: function(){
                            $("#"+dependent).attr('disabled', 'disabled');
                            $("#"+dependent).html('<option value="">Waiting...</option>');

                        }
                    });
                }
            })
        })
    </script>
@endsection
