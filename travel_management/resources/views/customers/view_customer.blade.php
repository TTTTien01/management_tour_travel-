<x-layout title="View">
    <p class="text-center display-2">
        View Customer
    </p>
    
<div class="text-center display-5">
    <p>Created at: {{$customer->created_at->format('d/m/Y H:i:s')}}</p>
    <p>Name: {{$customer->customername}}</p>
    <p>Gender: {{$customer->mota}}</p>
    <p>CMND/CCCD:{{$customer->cmnd}}</p>
    <p>Address:{{$customer->adddress}}</p>
    <p>Phone number:{{$customer->phonenumber}}</p>
    <p>Note:{{$customer->note}}</p>
    <p>Mã Tour:{{$customer->matour}}</p>
</div>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">về trang danh sách </button>
    </div>

</x-layout>