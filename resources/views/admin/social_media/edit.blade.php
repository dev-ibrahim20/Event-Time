@extends('layouts.app')
@section('title')
Dashboard - Edit Social Media
@stop
@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">وسائل التواصل</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    تعديل وسيلة تواصل</span>
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
                    <h4 class="card-title mg-b-0">تعديل وسيلة تواصل: {{ $socialMedia->name }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin-social-media.update', $socialMedia->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">الاسم <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $socialMedia->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="url">الرابط <span class="text-danger">*</span></label>
                                    <input type="url" class="form-control" id="url" name="url" value="{{ $socialMedia->url }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="icon">الأيقونة (Font Awesome)</label>
                                    <input type="text" class="form-control" id="icon" name="icon" value="{{ $socialMedia->icon }}" placeholder="مثال: fab fa-facebook">
                                    <small class="text-muted">اكتب كود الأيقونة من Font Awesome</small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="is_active">
                                        <input type="checkbox" id="is_active" name="is_active" value="1" {{ $socialMedia->is_active ? 'checked' : '' }}>
                                        نشط
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sort_order">الترتيب</label>
                                    <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ $socialMedia->sort_order }}" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> تحديث
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
