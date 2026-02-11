@extends('layouts.app')
@section('title')
Dashboard - Social Media
@stop
@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">وسائل التواصل</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    إدارة وسائل التواصل الاجتماعي</span>
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

<div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">وسائل التواصل الاجتماعي</h4>
                        <a href="{{ route('admin-social-media.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>&nbsp; إضافة وسيلة تواصل
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap" data-page-length='50' style="text-align: center">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">الاسم</th>
                                    <th class="border-bottom-0">الرابط</th>
                                    <th class="border-bottom-0">الأيقونة</th>
                                    <th class="border-bottom-0">الحالة</th>
                                    <th class="border-bottom-0">الترتيب</th>
                                    <th class="border-bottom-0">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($socialMedia as $media)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $media->name }}</td>
                                        <td>
                                            <a href="{{ $media->url }}" target="_blank" class="text-primary">
                                                {{ Str::limit($media->url, 30) }}
                                            </a>
                                        </td>
                                        <td>
                                            @if($media->icon)
                                                <i class="{{ $media->icon }} text-primary"></i>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($media->is_active)
                                                <span class="badge badge-success">نشط</span>
                                            @else
                                                <span class="badge badge-danger">غير نشط</span>
                                            @endif
                                        </td>
                                        <td>{{ $media->sort_order }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin-social-media.edit', $media->id) }}">
                                                        <i class="fas fa-edit text-primary"></i> تعديل
                                                    </a>

                                                    <a class="dropdown-item" href="#" data-media_id="{{ $media->id }}"
                                                        data-toggle="modal" data-target="#delete_media">
                                                        <i class="fas fa-trash-alt text-danger"></i>&nbsp;&nbsp;حذف
                                                    </a>
                                                </div>
                                            </div>
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
</div>

<!-- حذف وسيلة التواصل -->
<div class="modal fade" id="delete_media" tabindex="-1" role="dialog" aria-labelledby="deleteMediaLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteMediaLabel">حذف وسيلة التواصل</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post" id="deleteMediaForm">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    هل أنت متأكد من عملية الحذف؟
                    <input type="hidden" name="media_id" id="media_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                    <button type="submit" class="btn btn-danger">تأكيد الحذف</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

<script>
// Handle delete media modal
$('#delete_media').on('show.bs.modal', function (e) {
    const mediaId = $(e.relatedTarget).data('media_id');
    $('#media_id').val(mediaId);
    const actionUrl = `{{ route('admin-social-media.destroy', ':id') }}`.replace(':id', mediaId);
    $('#deleteMediaForm').attr('action', actionUrl);
});

// Handle form submission and show success message
$('#deleteMediaForm').on('submit', function(e) {
    e.preventDefault();
    
    const form = $(this);
    const url = form.attr('action');
    
    $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        success: function(response) {
            // Close modal
            $('#delete_media').modal('hide');
            
            // Show success notification
            notif({
                msg: "تم حذف وسيلة التواصل بنجاح",
                type: "success"
            });
            
            // Reload page after a short delay
            setTimeout(function() {
                location.reload();
            }, 1000);
        },
        error: function(xhr) {
            // Show error notification
            notif({
                msg: "حدث خطأ أثناء الحذف",
                type: "error"
            });
        }
    });
});
</script>
