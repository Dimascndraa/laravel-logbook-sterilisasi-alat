<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page_chat()
    {
        return view('pages.page.page_chat');
    }
    public function page_contacts()
    {
        return view('pages.page.page_contacts');
    }
    public function page_invoice()
    {
        return view('pages.page.page_invoice');
    }
    public function page_profile()
    {
        return view('pages.page.page_profile');
    }
    public function page_search()
    {
        return view('pages.page.page_search');
    }
    public function blank()
    {
        return view('pages.page.blank');
    }

    public function page_forum_list()
    {
        return view('pages.page.forum.page_forum_list');
    }
    public function page_forum_threads()
    {
        return view('pages.page.forum.page_forum_threads');
    }
    public function page_forum_discussion()
    {
        return view('pages.page.forum.page_forum_discussion');
    }

    public function page_inbox_general()
    {
        return view('pages.page.inbox.page_inbox_general');
    }
    public function page_inbox_read()
    {
        return view('pages.page.inbox.page_inbox_read');
    }
    public function page_inbox_write()
    {
        return view('pages.page.inbox.page_inbox_write');
    }

    public function page_error()
    {
        return view('pages.page.error.page_error');
    }
    public function page_error_404()
    {
        return view('pages.page.error.page_error_404');
    }
    public function page_error_announced()
    {
        return view('pages.page.error.page_error_announced');
    }

    public function page_forget()
    {
        return view('pages.page.autent.page_forget');
    }
    public function page_locked()
    {
        return view('pages.page.autent.page_locked');
    }
    public function page_login()
    {
        return view('pages.page.autent.page_login');
    }
    public function page_login_alt()
    {
        return view('pages.page.autent.page_login_alt');
    }
    public function page_register()
    {
        return view('pages.page.autent.page_register');
    }
    public function page_confirmation()
    {
        return view('pages.page.autent.page_confirmation');
    }
}
