<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/">
    <channel>
        <title>{{ $title }}</title>
        <link>{{ url('/') }}</link>
        <description>
            Information about Parbat.
        </description>
        <language>en-us</language>
        <lastBuildDate>{{ date('c') }}</lastBuildDate>
        @forelse($blogs as $key => $blog)
            <item>
                <title>{{ $blog->newsTitle }}</title>
                <link>{{ route('news.newsDetail', ['slug' => $blog->id]) }}</link>
                <guid>{{ $blog->id }}</guid>
                <pubDate>{{ date('c', strtotime($blog->created_at)) }}</pubDate>
                <author>ParbatNepal</author>
                <description><{{ $blog->newsTitle}}</description>
                <content:encoded>
                    <![CDATA[
                    @include('partials._rss')
                    ]]>
                </content:encoded>
            </item>
        @empty
            <item>No feeds found</item>
        @endforelse
    </channel>
</rss>