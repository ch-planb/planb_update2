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
                            
                        <tr role="row"><th class="sorting_asc" tabindex="0"
                             aria-controls="example1" rowspan="1" colspan="1"
                              aria-sort="ascending"
                               aria-label="Name: activate to sort column descending"

                                style="width: 133.734px;">Id</th><th class="sorting" 
                                tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                 aria-label="Position: activate to sort column ascending"
                                  style="width: 222.891px;">slider name</th><th class="sorting" 
                                  tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                                  aria-label="Office: activate to sort column ascending"
                                   style="width: 98.6719px;">slider desc</th><th class="sorting"
                                    style="width: 98.6719px;">Image</th><th>status</th><th>acton/update</th></tr>
          
                        </thead>
                        <tbody>
                        @foreach ($testimonials as $testimonial)
                        <tr  role="row" class="odd">
                            <input name="" type="hidden" value="{{$testimonial->id}}">
                            <td>{{$testimonial->id}}</td>
                            <td>{{$testimonial->title}}</td>
                            <td>{{$testimonial->testimonial}} </td>
                            <td><img src="{{asset('upload/testimonals/' . $testimonial->slider_img )}}" width="100px;" height="100px;" alt="Image"> </td>
                            <td>
                                @if($testimonial->status == 1)
                                <span class="badge badge-pill badge-success"> Active </span>
                                @else
                              <span class="badge badge-pill badge-danger"> InActive </span>
                                @endif
                   
                            </td>
                            <td>
                               
                               
                            @if($testimonial->testimonial == 1)
                                <a href="" class="btn btn-danger" title="Inactive Now"><i class="fa fa-arrow-down"></i> </a>
                                    @else
                                <a href="" class="btn btn-success" title="Active Now"><i class="fa fa-arrow-up"></i> </a>
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
            <form   method="POST" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                <select class="js-example-basic-single" name="client_id">
                    @foreach ($clients as $client)
                        
                    
                    <option value="{{$client->id}}">{{$client->name}}</option>
                    @endforeach 
                   
                  </select>
                </div>


                     <div class="form-group">
                           <h5>testimonial <span class="text-danger">*</span></h5>
                           <div class="controls">
                           <input type="text"  id="testimonial" name="testimonial" class="form-control" > 
                            
                           @error('testimonial')
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


