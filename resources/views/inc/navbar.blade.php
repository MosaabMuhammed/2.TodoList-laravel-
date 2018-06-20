<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand active" href="/todo">Todo List</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('todo') ? 'active' : '' }}"><a href="/todo">Home</a></li>
                <li class="{{ Request::is('todo/create') ? 'active' : '' }}"><a href="/todo/create">Create a task</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
