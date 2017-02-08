<!-- Countries panel -->
<div class="panel panel-default">
    <div class="panel-body"> 
        <div class="sidebar-module">
            <h4>Countries</h4>
            <ul class="list-unstyled">
				<li><a href="#">Russia</a></li>
				<li><a href="#">USA</a></li>
				<li><a href="#">Germany</a></li>
            </ul>
        </div>  
    </div>
</div>   

<!-- Tags panel -->
<div class="panel panel-default">
    <div class="panel-body"> 
        <div class="sidebar-module">
            <h4>Tags</h4>
            <ol class="list-unstyled">
                @foreach($tags as $tag)
                    <li>
                        <a href="/posts/tags/{{ $tag}}">
                            {{ $tag }} 
                        </a>
                    </li>
                @endforeach
            </ol>
        </div>  
    </div>
</div>  
<!-- Archives panel -->
<div class="panel panel-default">
    <div class="panel-body"> 
        <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
                @foreach($archives as $archive)
                    <li>
                        <a href="/posts/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
                            {{ $archive['month'] . ' ' . $archive['year'] }}
                        </a>
                        [{{ $archive['published'] }}]
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</div>   

@include('layouts.about')
 
<!-- Links panel -->  
<div class="panel panel-default">
    <div class="panel-body">
        <div class="sidebar-module">
            <h4>Foolow Us</h4>
            <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ol>
        </div>
    </div>
</div>