<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enquiry;
use App\Models\Blog;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    function index()
    {
        $adminCount = User::whereIn('role', ['Superadmin', 'Admin'])->count();
        $enquiryCount = Enquiry::count();
        $pageEnquiryCount = Enquiry::whereIn('source', ['contact_page', 'listing_page'])->count();
        $whatsappEnquiryCount = Enquiry::where('source', 'whatsapp')->count();
        
        $recentLogs = ActivityLog::orderBy('id', 'DESC')->limit(10)->get();

        return view('admin.dashboard', compact('adminCount', 'enquiryCount', 'pageEnquiryCount', 'whatsappEnquiryCount', 'recentLogs'));
    }
}