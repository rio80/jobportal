@extends('template')
@section('page')


    <body class="login-page sidebar-collapse">
        @extends('navbar')
        <div class="not-landing page-header clear-filter" filter-color="orange">
                <div class="page-header-image" style="background-image:url({{ asset('img/white-solid.jpg') }}); z-index: 0;"></div>
                 <div class="content">
                     <div class="container">
                         <div class="row">
                             <div class="card">
                                 <div class="card-header" style="text-align: left; border-bottom: 1px solid #bbbbbb">
                                     <div class="col-md-12">
                                     <h4>Pendidikan <span class="badge badge-danger">EDIT</span></h4>
                                     </div>
                                 </div>
                                 <div class="card-body">
                                     <form>
                                         <div class="form-group row">
                                             <label for="input1" class="col-md-2 col-form-label text-left">Institusi <span class="text-danger">*</span></label>
                                             <div class="col-md-10">
                                                 <input type="text" class="form-control" id="input1" placeholder="Institusi">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="input2" class="col-md-2 col-form-label text-left">Tanggal Wisuda <span class="text-danger">*</span></label>
                                             <div class="col-md-3">
                                                 <select id="input2" class="form-control">
                                                     <option selected>Oktober</option>
                                                     <option>...</option>
                                                 </select>
                                             </div>
                                             <div class="col-md-3">
                                                 <select id="input3" class="form-control">
                                                     <option selected>2019</option>
                                                     <option>...</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="input4" class="col-md-2 col-form-label text-left">Kualifikasi <span class="text-danger">*</span></label>
                                             <div class="col-md-10">
                                                 <select id="input4" class="form-control">
                                                     <option selected>Sarjana (S1)</option>
                                                     <option>...</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="input5" class="col-md-2 col-form-label text-left">Lokasi <span class="text-danger">*</span></label>
                                             <div class="col-md-10">
                                                 <select id="input5" class="form-control">
                                                     <option selected>Indonesia</option>
                                                     <option>...</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="input6" class="col-md-2 col-form-label text-left">Bidang Studi <span class="text-danger">*</span></label>
                                             <div class="col-md-10">
                                                 <select id="input6" class="form-control">
                                                     <option selected>Ilmu Komputer</option>
                                                     <option>...</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="input7" class="col-md-2 col-form-label text-left">Jurusan</label>
                                             <div class="col-md-10">
                                                 <select id="input7" class="form-control">
                                                     <option selected>Tehnik Informatika</option>
                                                     <option>...</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="input8" class="col-md-2 col-form-label text-left">Nilai Akhir</label>
                                             <div class="col-md-10">
                                                 <select id="input8" class="form-control">
                                                     <option selected>IPK</option>
                                                     <option>...</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="input9" class="col-md-2 col-form-label text-left">Skor <span class="text-danger">*</span></label>
                                             <div class="col-md-3">
                                                 <input type="text" class="form-control" id="input9" placeholder="...">
                                             </div>
                                             <label for="input10" class="col-md-1 col-form-label text-left">Dari <span class="text-danger">*</span></label>
                                             <div class="col-md-3">
                                                 <input type="text" class="form-control" id="input10" placeholder="...">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="input11" class="col-md-2 col-form-label text-left">Informasi Tambahan</label>
                                             <div class="col-md-10">
                                                 <textarea class="form-control" id="input11" rows="9"></textarea>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                                 <div class="card-footer" style="text-align: right; border-top: 1px solid #bbbbbb; background-color: #eeeeee">
                                     <div class="col-md-12">
                                         <button type="button" class="btn btn-success">Simpan</button>
                                         <button type="button" class="btn btn-danger">Batal</button>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="col-md-4">

                                 </div>
                                 <div class="col-md-8">

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             @endsection
