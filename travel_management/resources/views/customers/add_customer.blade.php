<x-layout title="Add Customer">
    <p class="text-center">
        Đây là trang thêm customer
    </p>
    <div class="row">
        <div class="col-md-8 offset-md-2">
  
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
            <form method="post" action="{{ route('save_customer') }}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <x-input name="customername" label="Name"/>
                <x-input name="gender" label="Gender"/>
                <x-input name="cmnd" label="CMND/CCCD"/>
                <x-input name="adddress" label="Address"/>
                <x-input name="phonenumber" label="Phone number"/>
                <x-input name="note" label="Note" rows="10"/>
                <x-input name="matour" label="Matour"/>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
  </x-layout>