@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <!--div class="col-md-6 offset-md-3"-->
		<h3><center>Buat Data Rincian Biaya Perjalanan Dinas</center></h3>
                    <hr>
                    <br>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message')}}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
			
			<!-- membuat form  -->
			<!-- gunakan tanda [] untuk menampung array  -->

            <form action="{{url('/rincianbiaya')}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}
			<!-- add-more -->	
			<div class="control-group after-add-more">
			
				<div class="form-group">
                    <input type="text"  name="spd_id[]" value="{{$spd->id}}" class="form-control" hidden>
                </div>
				
				<div class="row">
				<div class="col">
                <div class="form-group">
                    <label>Rincian Biaya</label>
                    <select name="ref_rincian_biaya_id[]" class="form-control">
                        <option value="">Pilih Biaya</option>
                        @foreach($biaya as $r)
                            <option value="{{$r->id}}"> {{$r->biaya}} </option>
                        @endforeach
                    </select>
                </div>
				</div>
				
				<div class="col">
				<div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="text" name="jumlah[]" class="form-control">
                </div>
				</div>
				
				<div class="col">
				<div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" name="keterangan[]" class="form-control">
                </div>
				</div>
				<div class="col">
					<label for=""></label><br>
					<button class="btn btn-success add-more" type="button">
					<i class="glyphicon glyphicon-plus"></i> + Add
					</button>
				</div>
				
				</div> <!-- row -->
				<div class="row">
					<div class="col"><hr></div>
				</div>
				
			</div>	
			<!-- end -->
			
                <input type="submit" class="btn btn-primary" value="Simpan">
			</form>
			
			 <!-- class hide membuat form disembunyikan  -->
			<!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
			<div class="copy invisible">
			<div class="control-group">
				<div class="form-group">
                    <input type="text"  name="spd_id[]" value="{{$spd->id}}" class="form-control" hidden>
                </div>
				
				<div class="row">
				<div class="col">
                <div class="form-group">
                    <label>Rincian Biaya</label>
                    <select name="ref_rincian_biaya_id[]" class="form-control">
                        <option value="">Pilih Biaya</option>
                        @foreach($biaya as $r)
                            <option value="{{$r->id}}"> {{$r->biaya}} </option>
                        @endforeach
                    </select>
                </div>
				</div>
				
				<div class="col">
				<div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="text" name="jumlah[]" class="form-control">
                </div>
				</div>
				
				<div class="col">
				<div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" name="keterangan[]" class="form-control">
                </div>
				</div>
				<div class="col">
					<label for=""></label><br>
					<button class="btn btn-danger remove" type="button">
					<i class="glyphicon glyphicon-remove"></i> Remove</button>
				</div>
				</div>
				<div class="row">
					<div class="col"><hr></div>
				</div>
			</div>
			</div>
			<!-- end -->
			
        <!--/div-->
    </div>
	<!-- fungsi javascript untuk menampilkan form dinamis  -->
	<!-- penjelasan :
		saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
		
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
@endsection

