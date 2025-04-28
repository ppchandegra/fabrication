@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dashboard Overview</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Gallery Stats -->
                        <div class="col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon bg-info">
                                    <i class="fas fa-images"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Gallery Items</span>
                                    <span class="info-box-number">{{ $stats['galleries'] }}</span>
                                    <a href="{{ route('admin.galleries.index') }}" class="small-box-footer">
                                        Manage Gallery <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Services Stats -->
                        <div class="col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon bg-success">
                                    <i class="fas fa-cogs"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Services</span>
                                    <span class="info-box-number">{{ $stats['services'] }}</span>
                                    <a href="#" class="small-box-footer">
                                        Manage Services <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Stats -->
                        <div class="col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Contact Messages</span>
                                    <span class="info-box-number">{{ $stats['contacts'] }}</span>
                                    <a href="#" class="small-box-footer">
                                        View Messages <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Quick Actions</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary btn-block">
                                                <i class="fas fa-plus"></i> Add Gallery Item
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" class="btn btn-success btn-block">
                                                <i class="fas fa-plus"></i> Add Service
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" class="btn btn-info btn-block">
                                                <i class="fas fa-cog"></i> Settings
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" class="btn btn-warning btn-block">
                                                <i class="fas fa-user"></i> Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
.info-box {
    background: #fff;
    border-radius: 0.25rem;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    display: flex;
    margin-bottom: 1rem;
    min-height: 80px;
    padding: .5rem;
    position: relative;
    width: 100%;
}

.info-box-icon {
    align-items: center;
    display: flex;
    font-size: 1.875rem;
    justify-content: center;
    text-align: center;
    width: 70px;
}

.info-box-content {
    padding: 5px 10px;
    flex: 1;
}

.info-box-text {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-size: 0.875rem;
    color: #6c757d;
}

.info-box-number {
    display: block;
    font-weight: 700;
    font-size: 1.5rem;
}

.small-box-footer {
    color: rgba(255,255,255,.8);
    display: block;
    padding: 3px 0;
    position: relative;
    text-align: center;
    text-decoration: none;
    z-index: 10;
    background: rgba(0,0,0,.1);
    color: #fff;
    font-size: .875rem;
    border-radius: 0.25rem;
    margin-top: 0.5rem;
}

.small-box-footer:hover {
    color: #fff;
    background: rgba(0,0,0,.15);
}
</style>
@endsection 