<div class="d-flex flex-row align-items-center commented-user">
    <div >
        <span class="commenter-name mr-2"> {{$discussion->name}}</span> 
        <span><i class="fas fa-calendar" aria-hidden="true"></i></span>
        <span class="mb-1  comment-time"> {{date('h:i D-m A, Y',strtotime($discussion->created_at))}}</span>
    </div>
</div>