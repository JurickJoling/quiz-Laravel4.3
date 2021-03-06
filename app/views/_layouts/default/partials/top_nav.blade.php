<header>
  <nav>
    
    <a href="/"><img src="{{asset('img/logo.png')}}" id="logo_img"></a>
    

    <div id="links" class="clearfix">
      <ul>
       <!-- @if(checkForTeacherRights())
           <li>{{link_to_route('createExam','Create a new features')}}</li>
           <li>{{link_to_route('createSubject','Create a new model')}}</li>
       @endif -->
           <li><a href="/">Welcome, {{{$currentUser->fname}}}</a>
                <ul id="drop-down">
                 @if(checkForAdminRights())
                     <li><a href="{{ URL::to('admin') }}">Admin Panel</a></li>
                 @elseif(checkForTeacherRights())
                     <li>{{link_to_route('showAllExamsToSpecTeacher','My Exams',$currentUser->user_id)}}</li>
                     <li>{{link_to_route('showMarksTeacher','Class Book',$currentUser->user_id)}}</li>
                 @elseif(normalUser())
                     <li>{{link_to_route('showMarksUser','My Marks',$currentUser->user_id)}}</li>
                 @endif
                 <li>{{link_to_route('logout','Logout')}}</li>
                </ul>
           </li>
      </ul>
    </div>
  </nav>
</header>
