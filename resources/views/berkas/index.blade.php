@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DAFTAR BERKAS SPD</b></h4>
		
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nomor Surat Tugas</th>
					<th>Surat Tugas</th>
					<th>Nota Dinas</th>
					<th>SPD</th>
					<th>Tiket</th>
					<th>Boarding Pass</th>
					<th>Bill Hotel</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_berkas as $berkas)
                <tr>
                    <td> {{ $i++ }}</td>
                    <td> {{$berkas->surattugas->st_nomor}} </td>
					<td> @if(isset($berkas->scan_surattugas))
							<a href="{{asset("/storage/$berkas->scan_surattugas")}}" target='_BLANK'> 
							<img src="{{ asset('/storage/img/Adobe-PDF-Document-icon.png') }}" alt="pdf"  >
							</a>
						@else
                                        -
                        @endif
					</td>
					
					<td> @if(isset($berkas->scan_nodin))
							<a href="{{asset("/storage/$berkas->scan_nodin")}}" target='_BLANK'> 
							<img src="{{ asset('/storage/img/Adobe-PDF-Document-icon.png') }}" alt="pdf" >
							</a>
						@else
                                        -
                        @endif
					</td>
					
					<td> @if(isset($berkas->scan_spd))
							<a href="{{asset("/storage/$berkas->scan_spd")}}" target='_BLANK'> 
							<img src="{{ asset('/storage/img/Adobe-PDF-Document-icon.png') }}" alt="pdf" >
							</a>
						@else
                                        -
                        @endif
					</td>
					
					<td> @if(isset($berkas->scan_tiket))
							<a href="{{asset("/storage/$berkas->scan_tiket")}}" target='_BLANK'> 
							<img src="{{ asset('/storage/img/Adobe-PDF-Document-icon.png') }}" alt="pdf" >
							</a>
						@else
                                        -
                        @endif
					</td>
					
					<td> @if(isset($berkas->scan_boarding_pass))
							<a href="{{asset("/storage/$berkas->scan_boarding_pass")}}" target='_BLANK'> 
							<img src="{{ asset('/storage/img/Adobe-PDF-Document-icon.png') }}" alt="pdf" >
							</a>
						@else
                                        -
                        @endif
					</td>
					
					<td> @if(isset($berkas->scan_bill_hotel))
							<a href="{{asset("/storage/$berkas->scan_bill_hotel")}}" target='_BLANK'> 
							<img src="{{ asset('/storage/img/Adobe-PDF-Document-icon.png') }}" alt="pdf" >
							</a>
						@else
                                        -
                        @endif
					</td>
					
                    <td>
                        <a href="{{url("/berkas/$berkas->id/edit")}}" class="btn btn-info btn-sm">Upload </a>
                        <!-- a href="{{url("/berkas/$berkas->id")}}" class="btn btn-info btn-sm">view </a -->
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_berkas->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
@endsection