@extends('layouts.app')
@section('title')
Dashboard - Quote Requests
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الطلبات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    طلبات عرض السعر</span>
            </div>
        </div>
    </div>
@endsection

@section('content')

@if (session()->has('delete'))
    <script>
        window.onload = function() {
            notif({
                msg: "{{ session()->get('delete') }}",
                type: "success"
            })
        }
    </script>
@endif

@if (session()->has('success'))
    <script>
        window.onload = function() {
            notif({
                msg: "{{ session()->get('success') }}",
                type: "success"
            })
        }
    </script>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="row">
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">طلبات عرض السعر</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table key-buttons text-md-nowrap" style="text-align: center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد</th>
                                <th>الهاتف</th>
                                <th>نوع الخدمة</th>
                                <th>تاريخ الفعالية</th>
                                <th>عدد الحضور</th>
                                <th>المكان</th>
                                <th>الحالة</th>
                                <th>مرفقات</th>
                                <th>التاريخ</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($requests as $req)
                                @php
                                    $attachments = $req->attachments ?? null;
                                    if (is_string($attachments)) {
                                        $attachments = json_decode($attachments, true);
                                    }
                                @endphp
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $req->full_name }}</td>
                                    <td>{{ $req->email }}</td>
                                    <td>{{ $req->phone }}</td>
                                    <td>{{ $req->service_type }}</td>
                                    <td>{{ $req->event_date }}</td>
                                    <td>{{ $req->expected_attendees }}</td>
                                    <td>{{ $req->event_location }}</td>
                                    <td>
                                        @php
                                            $statusClass = $req->status === 'completed' ? 'badge-success' : 'badge-warning';
                                        @endphp
                                        <span class="badge {{ $statusClass }}">{{ $req->status }}</span>
                                    </td>
                                    <td>
                                        @if(is_array($attachments) && count($attachments) > 0)
                                            <button type="button" class="badge badge-info" data-toggle="modal" data-target="#attachmentsModal{{ $req->id }}" style="cursor: pointer;">
                                                {{ count($attachments) }} مرفقات
                                            </button>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>{{ $req->created_at }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light border dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="min-width: 100px;">
                                                <i class="fas fa-ellipsis-v"></i> العمليات
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right shadow" style="border: none; border-radius: 8px; min-width: 180px;">
                                                <form action="{{ route('admin-quote-requests.toggle', $req->id) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item d-flex align-items-center px-3 py-2" style="border-radius: 6px; margin: 2px 8px;">
                                                        @if($req->status === 'pending')
                                                            <i class="fas fa-check-circle text-success ml-2"></i>
                                                            <span class="mr-auto">تم التنفيذ</span>
                                                        @else
                                                            <i class="fas fa-undo text-warning ml-2"></i>
                                                            <span class="mr-auto">إلغاء التنفيذ</span>
                                                        @endif
                                                    </button>
                                                </form>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" data-request_id="{{ $req->id }}"
                                                    data-toggle="modal" data-target="#delete_request">
                                                    <i class="fas fa-trash-alt text-danger"></i>&nbsp;&nbsp;حذف
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-muted">لا توجد طلبات</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $requests->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- حذف الطلب -->
<div class="modal fade" id="delete_request" tabindex="-1" role="dialog" aria-labelledby="deleteRequestLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteRequestLabel">حذف الطلب</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post" id="deleteRequestForm">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                هل أنت متأكد من عملية الحذف؟
                <input type="hidden" name="request_id" id="request_id" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" class="btn btn-danger">تأكيد الحذف</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Attachments Modals -->
@foreach ($requests as $req)
    @php
        $attachments = $req->attachments ?? null;
        if (is_string($attachments)) {
            $attachments = json_decode($attachments, true);
        }
    @endphp
    @if(is_array($attachments) && count($attachments) > 0)
        <div class="modal fade" id="attachmentsModal{{ $req->id }}" tabindex="-1" role="dialog" aria-labelledby="attachmentsModalLabel{{ $req->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="attachmentsModalLabel{{ $req->id }}">مرفقات الطلب #{{ $req->id }} - {{ $req->full_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        @php
                            $images = [];
                            $files = [];
                            foreach ($attachments as $attachment) {
                                $ext = strtolower(pathinfo($attachment, PATHINFO_EXTENSION));
                                if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                                    $images[] = $attachment;
                                } else {
                                    $files[] = $attachment;
                                }
                            }
                        @endphp
                        @if(count($images) > 0)
                            <div id="imageGallery{{ $req->id }}" class="carousel slide" data-ride="carousel" style="background: #000;">
                                <div class="carousel-inner">
                                    @foreach ($images as $index => $image)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img src="{{ asset($image) }}" class="d-block w-100" style="max-height: 500px; object-fit: contain;" alt="Attachment {{ $index + 1 }}">
                                        </div>
                                    @endforeach
                                </div>
                                @if(count($images) > 1)
                                    <a class="carousel-control-prev" href="#imageGallery{{ $req->id }}" role="button" data-slide="prev" style="background: rgba(255,255,255,0.8); width: 50px; height: 50px; top: 50%; transform: translateY(-50%); border-radius: 50%; transition: all 0.3s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.2);">
                                        <span class="carousel-control-prev-icon" aria-hidden="true" style="font-size: 24px; color: #000; transition: all 0.3s ease;"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#imageGallery{{ $req->id }}" role="button" data-slide="next" style="background: rgba(255,255,255,0.8); width: 50px; height: 50px; top: 50%; transform: translateY(-50%); border-radius: 50%; transition: all 0.3s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.2);">
                                        <span class="carousel-control-next-icon" aria-hidden="true" style="font-size: 24px; color: #000; transition: all 0.3s ease;"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                @endif
                            </div>
                            <style>
                                #imageGallery{{ $req->id }} .carousel-control-prev:hover,
                                #imageGallery{{ $req->id }} .carousel-control-next:hover {
                                    background: rgba(255,255,255,0.95) !important;
                                    transform: translateY(-50%) scale(1.1) !important;
                                    box-shadow: 0 4px 12px rgba(0,0,0,0.3) !important;
                                }
                                #imageGallery{{ $req->id }} .carousel-control-prev:hover .carousel-control-prev-icon,
                                #imageGallery{{ $req->id }} .carousel-control-next:hover .carousel-control-next-icon {
                                    color: #ff4757 !important;
                                    font-size: 26px !important;
                                }
                            </style>
                        @endif
                        @if(count($files) > 0)
                            <div class="p-3">
                                <h6 class="mb-3">ملفات أخرى:</h6>
                                <div class="list-group">
                                    @foreach ($files as $file)
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-paperclip mr-2"></i>
                                                <span>{{ basename($file) }}</span>
                                            </div>
                                            <a href="{{ asset($file) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i> عرض
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

@endsection

<script>
// Handle delete request modal
$('#delete_request').on('show.bs.modal', function (e) {
    const requestId = $(e.relatedTarget).data('request_id');
    console.log('Request ID:', requestId);
    $('#request_id').val(requestId);
    
    // Build the action URL manually to avoid any issues
    const actionUrl = `{{ route('admin-quote-requests.destroy', ':id') }}`.replace(':id', requestId);
    console.log('Action URL:', actionUrl);
    console.log('Form method:', $('#deleteRequestForm').find('input[name="_method"]').val());
    
    $('#deleteRequestForm').attr('action', actionUrl);
});

// Handle form submission and show success message
$('#deleteRequestForm').on('submit', function(e) {
    e.preventDefault();
    
    const form = $(this);
    const url = form.attr('action');
    
    console.log('Submitting delete form to:', url);
    console.log('Form data:', form.serialize());
    
    $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        success: function(response) {
            console.log('Delete successful:', response);
            
            // Close modal
            $('#delete_request').modal('hide');
            
            // Show success notification
            console.log('Showing delete notification...');
            notif({
                msg: "تم حذف الطلب بنجاح",
                type: "success"
            });
            
            // Reload page after a short delay
            setTimeout(function() {
                location.reload();
            }, 1000);
        },
        error: function(xhr) {
            console.log('Delete error:', xhr);
            // Show error notification
            notif({
                msg: "حدث خطأ أثناء الحذف",
                type: "error"
            });
        }
    });
});

// Handle toggle status form submission
$('form[action*="/toggle"]').on('submit', function(e) {
    e.preventDefault();
    
    const form = $(this);
    const url = form.attr('action');
    
    console.log('Submitting toggle form to:', url);
    console.log('Form data:', form.serialize());
    
    $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        success: function(response) {
            console.log('Toggle successful:', response);
            
            // Show success notification
            console.log('Showing toggle notification...');
            notif({
                msg: "تم تغيير الحالة بنجاح",
                type: "success"
            });
            
            // Reload page after a short delay
            setTimeout(function() {
                location.reload();
            }, 1000);
        },
        error: function(xhr) {
            console.log('Toggle error:', xhr);
            // Show error notification
            notif({
                msg: "حدث خطأ أثناء تغيير الحالة",
                type: "error"
            });
        }
    });
});
</script>
