<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<header>
    <script src="https://cdn.tailwindcss.com"></script>
</header>
    <table border="0" cellpadding="0" cellspacing="0" class="itemlist">
        <tbody>
        @foreach ($posts as $post)
            <tr class="athing" id="{{ $post->id }}">
                <td valign="top" class="votelinks">
                    <center>
                        <a id="up_26035411" class="clicky" href="vote?id=26035411&amp;how=up&amp;auth=ff8344a9b9eb4bd4107064bfde48c891d54a23cc&amp;goto=from%3Fnext%3D26035411%26site%3Dmarksblogg.com">
                            <div class="votearrow" title="upvote">
                            </div>
                        </a>
                    </center>
                </td>
                <td align="right" valign="top" class="title">
                    <span class="rank">{{ $loop->index+1 }}.</span>
                </td>
                <td valign="top" class="votelinks"><center>
                        <a id="up_31093376" class="clicky" href="vote?id=31093376&amp;how=up&amp;auth=1fffcc2b1fc1527c78b7430f0a46c59339e9f436&amp;goto=news">
                            <div class="votearrow" title="upvote"></div>
                        </a></center>
                </td>
                <td class="title">
                    <a href="{{ $post->link }}" class="titlelink">
                        {{ $post->title }}
                    </a>
                    <span class="sitebit comhead">(
                        <a target="_blank" href="htts://marksblogg.com">
                            <span class="sitestr">
                                marksblogg.com
                            </span>
                        </a>)
                    </span>
                </td>
            </tr>
            <tr><td colspan="2"></td><td class="subtext">
                    <span class="score" id="score_26035411">
                        {{ $post->amount_of_upvote }}
                    </span> by
                    <a href="user?id={{isset(Auth::user()->id) ? Auth::user()->id : ''}}" class="hnuser">
                        {{ $post->author_name }}
                    </a>
                    <span class="age" title="{{ $post->created_at }}">
                        on
                        <a href="item?id=26035411">{{ $post->created_at->format('F d, Y') }}
                        </a>
                    </span>
                    <span id="unv_26035411">

                    </span> |
                    <a href="https://hn.algolia.com/?query=1.1B%20Taxi%20Rides%20Using%20Hydrolix%20on%20AWS&amp;type=story&amp;dateRange=all&amp;sort=byDate&amp;storyText=false&amp;prefix&amp;page=0" class="hnpast">
                        past
                    </a> |
                    <a href="item?id=26035411">
                        1&nbsp;comment
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
<div class="bg-white rounded-lg shadow-lg py-6">
    <div class="block overflow-x-auto mx-6">
        <table class="w-full text-left rounded-lg">
            <thead>
            <tr class="text-gray-800 border border-b-0">
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Avatar</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                <td class="px-4 py-4">1</td>
                <td class="px-4 py-4">Bedram Tamang</td>
                <td class="px-4 py-4">
                    <img class="h-6 w-6 rounded-full"
                         src="/assets/docs/master/image-01.jpg">
                </td>
                <td class="px-4 py-4">tmgbedu@gmail.com</td>
                <td class="px-4 py-4">
                    <span class="text-sm bg-green-500 text-white rounded-full px-2 py-1">Active</span>
                </td>
                <td class="text-center py-4">
                    <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                    <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                </td>
            </tr>
            <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
                <td class="px-4 py-4">2</td>
                <td class="px-4 py-4">Taylor Otwel</td>
                <td class="px-4 py-4">
                    <img class="h-6 w-6 rounded-full"
                         src="/assets/docs/master/image-01.jpg">
                </td>
                <td class="px-4 py-4">taylow@laravel.com</td>
                <td class="px-4 py-4">
                    <span class="text-sm bg-yellow-500 text-white rounded-full px-2 py-1">Pending</span>
                </td>
                <td class="text-center py-4">
                    <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                    <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                </td>
            </tr>
            <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                <td class="px-4 py-4">3</td>
                <td class="px-4 py-4">Adam wathan</td>
                <td class="px-4 py-4">
                    <img class="h-6 w-6 rounded-full"
                         src="/assets/docs/master/image-01.jpg">
                </td>
                <td class="px-4 py-4">tmgbedu@gmail.com</td>
                <td class="px-4 py-4">
                    <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1">Not Active</span>
                </td>
                <td class="text-center py-4">
                    <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                    <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</html>
