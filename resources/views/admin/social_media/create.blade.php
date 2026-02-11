@extends('layouts.app')
@section('title')
Dashboard - Add Social Media
@stop
@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">وسائل التواصل</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    إضافة وسيلة تواصل جديدة</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <h4 class="card-title mg-b-0">إضافة وسيلة تواصل جديدة</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin-social-media.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">الاسم <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="url">الرابط <span class="text-danger">*</span></label>
                                    <input type="url" class="form-control" id="url" name="url" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="icon">الأيقونة (Font Awesome)</label>
                                    <input type="text" class="form-control" id="icon" name="icon" placeholder="مثال: fab fa-facebook">
                                    <small class="text-muted">اكتب كود الأيقونة من Font Awesome</small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="is_active">
                                        <input type="checkbox" id="is_active" name="is_active" value="1" checked>
                                        نشط
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sort_order">الترتيب</label>
                                    <input type="number" class="form-control" id="sort_order" name="sort_order" value="0" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> حفظ
                                </button>
                                <a href="{{ route('admin-social-media.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-times"></i> إلغاء
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
