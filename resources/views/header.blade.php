<header style="background-color: lightpink;">
    <h2 style="text-align: center">donuts.com</h2>
    <form action="{{route('landing.donuts')}}" method="get" style="padding-bottom: 10px">
        <input required name="search" placeholder="Enter donut name" value="{{app('request')->input('search')}}">
        <input type="submit" value="Search">
    </form>
</header>
