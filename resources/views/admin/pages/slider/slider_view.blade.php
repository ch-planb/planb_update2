@extends('admin.admin_master')
@section('admin_content')
<div class="row">


    <div class="col-lg-8">
        <div class="box mt-2">
            <div class="box-header with-border">
              <h3 class="box-title">slider data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div class="table-responsive">
                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        
                
                        <thead>
                            
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 133.734px;">Id</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 222.891px;">slider name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 98.6719px;">slider desc</th><th class="sorting" style="width: 98.6719px;">Image</th><th>status</th><th>acton/update</th></tr>
          
                        </thead>
                        <tbody>
                        @foreach ($sliders as $slider)
                        <tr  role="row" class="odd">
                            <input name="" type="hidden" value="{{$slider->id}}">
                            <td>{{$slider->id}}</td>
                            <td>{{$slider->title}}</td>
                            <td>{{$slider->description}} </td>
                            <td><img src="{{asset('upload/slider_images/' . $slider->slider_img )}}" width="100px;" height="100px;" alt="Image"> </td>
                            <td>
                                @if($slider->status == 1)
                                <span class="badge badge-pill badge-success"> Active </span>
                                @else
                              <span class="badge badge-pill badge-danger"> InActive </span>
                                @endif
                   
                            </td>
                            <td>
                               
                               
                            @if($slider->status == 1)
                                <a href="{{route('slider.inactive',$slider->id)}}" class="btn btn-danger" title="Inactive Now"><i class="fa fa-arrow-down"></i> </a>
                                    @else
                                <a href="{{route('slider.active',$slider->id)}}" class="btn btn-success" title="Active Now"><i class="fa fa-arrow-up"></i> </a>
                                    @endif
                               
                               
                               
                               
                                </td>
        
                        </tr>   

                        @endforeach    
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>

        </div>
    </div>
                    
                
           
    


<div class="col-lg-4">
    <div class="box mt-2">
        <div class="box-header with-border">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form   method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                @csrf           
                 
                       <div class="form-group">
                           <h5> <span class="text-danger">*</span> slider name</h5>
                           <div class="controls">
                           {{-- <input type="text" id="brand_name_cats_eye" name="brand_name_cats_eye" class="form-control" @error('brand_name_cats_eye') is-invalid @enderror >  --}}
                           <input id="title" name="title" type="text"  class="form-control 
                           @error('title') is-invalid   @enderror " id="exampleInputEmail1" aria-describedby="emailHelp">
                          
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>	
                                </span>
                                @enderror   
                        </div>
                              
                           </div>      
{{--                            
                           <input type="name" name="name" class="form-control 
          @error('name') is-invalid   @enderror " id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('name')
      <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div> --}}
     
                   
                       <div class="form-group">
                           <h5>slider desc <span class="text-danger">*</span></h5>
                           <div class="controls">
                           <input type="text"  id="description" name="description" class="form-control" > 
                            
                           @error('description')
                           <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>	
                         </span>
                             @enderror
                        </div>
                           
                           </div>    

                           
                                          
    
                        
                           <div class="form-group">
                           <h5> Brand Img <span class="text-danger">*</span></h5>
                           <div class="controls">
                           <input type="file" id="slider_img" name="slider_img" class="form-control" > 
                           
                           @error('slider_img')
                           <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>	
                         </span>
                             @enderror 
                        </div>
                            
                          
                           </div>

                           
                           
                           
                   
                       <div class="text-xs-right">
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">ADD Brand</button>
                   </div>
    
               </form>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
</div>

        

@endsection


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



