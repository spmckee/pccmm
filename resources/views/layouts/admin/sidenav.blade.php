<nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
  <ul class="nav nav-pills flex-column">
  <li class="nav-item">
      <a class="nav-link {{ current_page('admin') ? 'active':'' }}" href="/admin">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ current_page('classes') ? 'active':'' }}" href="/admin/classes">Classes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ current_page('schedule') ? 'active':'' }}" href="/admin/schedule">Schedule</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ current_page('students') ? 'active':'' }}" href="/admin/students">Students</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ current_page('instructors') ? 'active':'' }}" href="/admin/instructors">Instructors</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ current_page('events') ? 'active':'' }}" href="/admin/events">Events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ current_page('showcase') ? 'active':'' }}" href="/admin/showcase">Showcase</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ current_page('tools') ? 'active':'' }}" href="/admin/tools">Tools</a>
    </li>
  </ul>

  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="#">Nav item</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Nav item again</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">One more nav</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Another nav item</a>
    </li>
  </ul>
</nav>