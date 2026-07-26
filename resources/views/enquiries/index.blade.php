@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <div class="page-header-content d-lg-flex container">
            <div class="d-flex">
                <h4 class="page-title mb-0"> Enquiries - <span class="fw-normal">All Enquiries</span> </h4>
                <a href="#page_header"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse"> <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> </a>
            </div>
        </div>
    </div>
    <div class="content container pt-0">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h6 class="mb-0"><i class="ph ph-sliders me-1"></i> Filters</h6>
                <div class="d-inline-flex ms-auto">
                    <a class="text-body" data-card-action="collapse">
                        <i class="ph-caret-down"></i>
                    </a>
                </div>
            </div>
            <div class="collapse">
                <div class="card-body">
                    <form action="{{ route('enquiries.index') }}" method="GET">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Name:</label>
                                <input type="text" name="name" value="{{ request('name') }}" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Email:</label>
                                <input type="text" name="email" value="{{ request('email') }}" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Phone:</label>
                                <input type="text" name="phone" value="{{ request('phone') }}" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Source:</label>
                                <input type="text" name="source" value="{{ request('source') }}" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Start Date:</label>
                                <input type="date" name="start" value="{{ request('start') }}" class="form-select">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">End Date:</label>
                                <input type="date" name="end" value="{{ request('end') }}" class="form-select">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary me-2">Filter <i
                                    class="ph ph-arrow-right ms-1"></i></button>
                            <a href="{{ route('enquiries.index') }}" class="btn btn-light"><i
                                    class="ph ph-spinner me-1"></i> Reset</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card border">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Created At</th>
                            <th>Name / Country</th>
                            <th>Contact</th>
                            <th>Message</th>
                            <th>Order Quantity</th>
                            <th>Contacted At</th>
                            <th>Business Type / Categories</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $cat)
                            <tr>
                                <td>
                                    {{ \Carbon\Carbon::parse($cat->created_at)->format('d F Y') }}
                                </td>
                                <td>
                                    <b><a href="{{ route('enquiries.show', $cat->id) }}">{{ $cat->name }}<br>
                                            <small class="text-muted">{{ $cat->country }}</small></a></b>
                                </td>
                                <td>
                                    <div>{{ $cat->phone }}</div>
                                    <div class="text-muted">{{ $cat->email }}</div>
                                </td>
                                <td>{{ Str::limit($cat->message, 25) }}</td>
                                <td>{{ $cat->order_quantity ?? 'N/A' }}</td>
                                <td>
                                    @if ($cat->is_contacted)
                                        {{ \Carbon\Carbon::parse($cat->updated_at)->format('h:i a F d') }}
                                    @else
                                        No
                                    @endif
                                </td>
                                <td>
                                    {{ $cat->business_type }}<br>
                                    <small class="text-muted">
                                        <?php if (is_array($cat->product_categories)): ?>
                                        <ul>
                                            <?php foreach ($cat->product_categories as $category): ?>
                                            <li><?php echo htmlspecialchars($category); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php else: ?>
                                        <?php echo htmlspecialchars($cat->product_categories); ?>
                                        <?php endif; ?>
                                    </small>
                                </td>
                                <td class="text-end">
                                    <div class="d-inline-flex">
                                        <a href="{{ route('enquiries.show', $cat->id) }}" class="text-body">
                                            <i class="ph ph-eye" title="Show Message"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </form>
            </div>
        </div>
        {{ $data->appends(request()->all())->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
