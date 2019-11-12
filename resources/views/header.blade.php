<header>
    <div class="container-header">
        <a href="{{url('/')}}">
        <img class="img-icon" id="headerIcon"
             src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6zuD_qeMLNmUOJV6S6TMo4OB3UXdKAwlYRwHOViElIUcEjGfJ3A&s">
        </a>
            <form action="{{route('store')}}" method="post">
            {{ csrf_field() }}
            <label>
                <input
                    type="text"
                    value=""
                    name="path"
                    placeholder=" please, input address directory "
                    class="input"
                    required
                >
            </label>
            <input type="submit" value="show tree" class="btn-show">
        </form>
    </div>
</header>




