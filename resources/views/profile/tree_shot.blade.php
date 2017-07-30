@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="css/tree_shot.css">
@section('content')

<div class="tree">
    @foreach ($mothers as $mother)
    @foreach ($fathers as $father)
   
    
		<!--<ul>-->
			<!--<li>-->
				<!--<a href="#">Parent</a><a href="#">Sub Parent 2</a>-->
				<!--<ul>-->
					<!--<li>-->
						<!--<a href="#">ninad</a>-->
						<!--<ul>-->
							<!--<li>-->
								<!--<a href="#">Grand casda</a>-->
							</li>
						</ul>
					</li>
					<li>
						<a href="#">{{$mother->mFirstname}}</a><a href="#">{{$father->fFirstname}}</a>
						<!--<ul>-->
							<!--<li><a href="#">spouse</a></li>-->
							<li>
								<a href="#">children</a>
								<ul>
									<li>
										<!--<a href="#">Great Grand Child</a>-->
									</li>
									<li>
										<a href="#">Child</a>
									</li>
									<li>
										<!--<a href="#">Great Grand Child</a>-->
									</li>
								<!--</ul>-->
							</li>
							<!--<li><a href="#">Grand Child</a></li>-->
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
      @endforeach
     @endforeach
    

@endsection