<?php use Illuminate\Support\Facades\Route; ?>
<div class="nav">
        <ul>
            <li class="home"><a @if (\Request::is(''))
                                class="active"
                                @endif href="/">Odd-Net</a></li>
            <li class="blog"><a @if (\Request::is('blog'))
                                class="active"
                                @endif href="/blog">Blog</a></li>
            <li class="about">
                <a @if (\Request::is('blog/create'))
                        class="active"
                   @endif href="blog/create">Create</a></li>
            <li class="news"><a @if (\Request::is('blogsss'))
                                class="active"
                                @endif href="#">Newsletter</a></li>
            <li class="contact"><a @if (\Request::is('blogsss'))
                                   class="active"
                                   @endif href="#">Contact</a></li>
        </ul>
 </div>