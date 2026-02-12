@extends('layouts.app')
@section('title')
Dashboard - Portfolio
@stop
@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الأعمال</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    إدارة أعمال السابقة</span>
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
                        <h4 class="card-title mg-b-0">الأعمال السابقة</h4>
                        <a href="{{ route('admin-portfolios.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>&nbsp; إضافة عمل جديد
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap" data-page-length='50' style="text-align: center">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">الصورة</th>
                                    <th class="border-bottom-0">العنوان</th>
                                    <th class="border-bottom-0">العميل</th>
                                    <th class="border-bottom-0">التاريخ</th>
                                    <th class="border-bottom-0">الخدمة</th>
                                    <th class="border-bottom-0">مميز</th>
                                    <th class="border-bottom-0">الحالة</th>
                                    <th class="border-bottom-0">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $portfolio)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if($portfolio->images && count($portfolio->images) > 0)
                                                <div class="d-flex flex-wrap gap-1">
                                                    @foreach ($portfolio->images as $index => $image)
                                                        <button type="button" class="btn btn-sm btn-light border-0 p-1" 
                                                                onclick="openPortfolioModal('{{ $portfolio->id }}', {{ $index }})"
                                                                title="{{ $portfolio->title }} - Image {{ $index + 1 }}">
                                                            <img src="{{ asset('storage/' . $image) }}" alt="{{ $portfolio->title }} - Image {{ $index + 1 }}" 
                                                             style="width: 40px; height: 40px; object-fit: cover; border-radius: 4px; cursor: pointer;"
                                                             onclick="openPortfolioModal('{{ $portfolio->id }}', {{ $index }})">
                                                        </button>
                                                    @endforeach
                                                </div>
                                            @else
                                                <div class="bg-gray-200 d-flex align-items-center justify-content-center" 
                                                             style="width: 40px; height: 40px; border-radius: 4px;">
                                                    <i class="fas fa-image text-gray-400"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <strong>{{ $portfolio->title }}</strong>
                                            @if($portfolio->is_featured)
                                                <span class="badge badge-warning ml-2">مميز</span>
                                            @endif
                                        </td>
                                        <td>{{ $portfolio->client_name ?? '-' }}</td>
                                        <td>{{ $portfolio->project_date ?? '-' }}</td>
                                        <td>
                                            @if($portfolio->service)
                                                <span class="badge badge-info">{{ $portfolio->service->title_ar ?? $portfolio->service->title_en }}</span>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($portfolio->is_featured)
                                                <span class="badge badge-success">نعم</span>
                                            @else
                                                <span class="text-muted">لا</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($portfolio->is_active)
                                                <span class="badge badge-primary">نشط</span>
                                            @else
                                                <span class="badge badge-secondary">غير نشط</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item" href="{{ route('admin-portfolios.edit', $portfolio->id) }}">
                                                        <i class="fas fa-edit text-primary"></i> تعديل
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-portfolio_id="{{ $portfolio->id }}"
                                                        data-toggle="modal" data-target="#deletePortfolioModal">
                                                        <i class="fas fa-trash text-danger"></i> حذف
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

<!-- Portfolio Delete Confirmation Modal -->
<div class="modal fade" id="deletePortfolioModal" tabindex="-1" role="dialog" aria-labelledby="deletePortfolioModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePortfolioModalLabel">تأكيد الحذف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin-portfolios.destroy', ':id') }}" method="post" id="deletePortfolioForm">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="portfolio_id" id="portfolio_id" value="">
                    <p>هل أنت متأكد من حذف هذا العمل؟</p>
                    <p class="text-muted">هذا الإجراء لا يمكن التراجع عنه.</p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="submit" form="deletePortfolioForm" class="btn btn-danger">حذف</button>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Images Modal -->
<div class="modal fade" id="portfolioImagesModal" tabindex="-1" role="dialog" aria-labelledby="portfolioImagesModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="portfolioImagesModalLabel">صور العمل</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="position-relative">
                    <!-- Navigation Arrows -->
                    <button type="button" class="btn btn-dark position-absolute" style="top: 50%; left: 10px; z-index: 1000; transform: translateY(-50%);" 
                            onclick="navigateImage(-1)" id="prevImageBtn" style="display: none;">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-dark position-absolute" style="top: 50%; right: 10px; z-index: 1000; transform: translateY(-50%);" 
                            onclick="navigateImage(1)" id="nextImageBtn" style="display: none;">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    
                    <!-- Main Image Display -->
                    <div id="mainImageContainer" class="text-center">
                        <img id="mainPortfolioImage" src="" alt="Portfolio Image" 
                             class="img-fluid rounded" style="max-height: 500px; object-fit: contain;">
                    </div>
                </div>
                
                <!-- Thumbnail Gallery -->
                <div id="portfolioImagesContainer" class="row mt-3">
                    <!-- Images will be loaded here -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>

<!-- حذف العمل -->
<div class="modal fade" id="delete_portfolio" tabindex="-1" role="dialog" aria-labelledby="deletePortfolioLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePortfolioLabel">حذف العمل</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post" id="deletePortfolioForm">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    هل أنت متأكد من عملية الحذف؟
                    <input type="hidden" name="portfolio_id" id="portfolio_id" value="">
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
// Open portfolio images modal
let currentPortfolioImages = [];
let currentImageIndex = 0;

function openPortfolioModal(portfolioId, imageIndex = 0) {
    const portfolio = @json($portfolios);
    const selectedPortfolio = portfolio.find(p => p.id == portfolioId);
    
    if (selectedPortfolio && selectedPortfolio.images && selectedPortfolio.images.length > 0) {
        currentPortfolioImages = selectedPortfolio.images;
        currentImageIndex = imageIndex;
        
        // Show navigation buttons if more than one image
        if (selectedPortfolio.images.length > 1) {
            document.getElementById('prevImageBtn').style.display = 'block';
            document.getElementById('nextImageBtn').style.display = 'block';
        }
        
        updateMainImage();
        loadThumbnails();
        
        $('#portfolioImagesModal').modal('show');
    }
}

// Navigate between images
function navigateImage(direction) {
    currentImageIndex += direction;
    
    // Wrap around if at boundaries
    if (currentImageIndex < 0) {
        currentImageIndex = currentPortfolioImages.length - 1;
    } else if (currentImageIndex >= currentPortfolioImages.length) {
        currentImageIndex = 0;
    }
    
    updateMainImage();
    loadThumbnails();
}

// Update main image display
function updateMainImage() {
    const mainImage = document.getElementById('mainPortfolioImage');
    if (mainImage && currentPortfolioImages[currentImageIndex]) {
        mainImage.src = asset('storage/' + currentPortfolioImages[currentImageIndex]);
        mainImage.alt = `Portfolio Image ${currentImageIndex + 1}`;
    }
}

// Load thumbnail gallery
function loadThumbnails() {
    const container = document.getElementById('portfolioImagesContainer');
    container.innerHTML = '';
    
    currentPortfolioImages.forEach((image, index) => {
        const imageHtml = `
            <div class="col-md-3 mb-3">
                <img src="${asset('storage/' + image)}" alt="Portfolio Image ${index + 1}" 
                     class="img-fluid rounded ${index === currentImageIndex ? 'border-primary' : ''}" 
                     style="max-height: 100px; object-fit: cover; cursor: pointer;"
                     onclick="openPortfolioModal('${currentPortfolioImages.find(p => p.images.includes(image)).id}', ${index})">
            </div>
        `;
        container.innerHTML += imageHtml;
    });
}

// Delete portfolio function
function deletePortfolio(portfolioId) {
    if (confirm('هل أنت متأكد من حذف هذا العمل؟')) {
        $.ajax({
            url: `{{ route('admin-portfolios.destroy', ':id') }}`.replace(':id', portfolioId),
            method: 'POST',
            data: {
                '_token': '{{ csrf_token() }}',
                '_method': 'DELETE'
            },
            success: function(response) {
                console.log('Delete successful:', response);
                
                // Show success notification
                notif({
                    msg: "تم حذف العمل بنجاح",
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
    }
}

// Handle delete portfolio form submission
$('form[action*="/admin-portfolios/"]').on('submit', function(e) {
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
            
            // Show success notification
            notif({
                msg: "تم حذف العمل بنجاح",
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
</script>
