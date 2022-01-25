<x-layout title="Add Customer">
    <p class="text-center">
        Đây là trang update customer
    </p>
    <div class="row">
        <div class="col-md-8 offset-md-2">
  
          @if ($errors->any())
              <div class="alert alert-danger">
                  Dữ liệu không hợp lệ, vui lòng kiểm tra lại!
              </div>
          @endif
            <form method="post" action="{{ route('save_customer',["id" => $customer->id]) }}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <x-input name="customername" label="Name" value="{{$customer->customername ?? ''}}"/>
                <x-input name="gender" label="Gender" value="{{$customer->gender ?? ''}}"/>
                <x-input name="cmnd" label="CMND/CCCD" value="{{$customer->cmnd ?? ''}}"/>
                <x-input name="adddress" label="Address" value="{{$customer->adddress ?? ''}}"/>
                <x-input name="phonenumber" label="Phone number" value="{{$customer->phonenumber ?? ''}}"/>
                <x-input name="note" label="Note" rows="10" value="{{$customer->note ?? ''}}"/>
                <x-input name="matour" label="Matour" value="{{$customer->matour ?? ''}}"/>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
  </x-layout>