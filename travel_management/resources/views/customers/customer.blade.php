<x-layout title="Customer" >

    <div>
        <div>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Thông tin khách hàng</h1>
                
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                       <a href="{{route('add_customer')}}"><h6 class="m-0 font-weight-bold text-primary">Thêm thông tin khách hàng</h6></a> 
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>CMND/CCCD</th>
                                        <th>Adddress</th>
                                        <th>Phonenumber</th>
                                        <th>Note</th>
                                        <th>Matour</th>
                                        <th>Created_at</th>
                                        <th>Activity</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>CMND/CCCD</th>
                                        <th>Adddress</th>
                                        <th>Phonenumber</th>
                                        <th>Note</th>
                                        <th>Matour</th>
                                        <th>Created_at</th>
                                        <th>Activity</th>
                                    </tr>
                                </tfoot>
                                <tbody>  
                                    @foreach ($data as $item)                               
                                      <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->customername}}</td>
                                        <td>{{$item->gender}}</td>
                                        <td>{{$item->cmnd}}</td>
                                        <td>{{$item->adddress}}</td>
                                        <td>{{$item->phonenumber}}</td>
                                        <td>{{$item->note}}</td>
                                        <td>{{$item->matour}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <a href="{{route("view_customer", ['id' => $item->id])}}">View</a>
                                            <a href="{{route("update_customer", ['id' => $item->id])}}">Update</a>
                                            <a href="{{route("delete_customer", ['id' => $item->id])}}">Delete</a>
                                        </td>
                                    </tr> 
                                    @endforeach     
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid  <div>
                                { {$data->links()}}
                            </div>-->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper --> 
</x-layout>