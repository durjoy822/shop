<style>
.styled-pagination {
    list-style: none;
    padding: 0;
    display: flex;
    align-items: center;
}

.styled-pagination li {
    margin: 0 5px;
}

.styled-pagination a {
    text-decoration: none;
    padding: 5px 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    color: #333;
    transition: background-color 0.3s, color 0.3s;
}

.styled-pagination a.active,
.styled-pagination a:hover {
    background-color: #007bff;
    color: #fff;
}

.styled-pagination .arrow {
    font-size: 14px;
}

/* You can customize the styles further based on your design preferences */

</style>
<ul class="styled-pagination">
    <li><a href="{{ $paginator->previousPageUrl() }}" class="arrow"><i class="fa-solid fa-chevron-left"></i></a></li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li><a href="{{ $paginator->url($i) }}"
                class="{{ $paginator->currentPage() == $i ? 'active' : '' }}">{{ $i }}</a></li>
    @endfor
    <li><a href="{{ $paginator->nextPageUrl() }}" class="arrow"><i class="fa-solid fa-chevron-right"></i></a></li>
</ul>



