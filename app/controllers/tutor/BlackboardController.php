<?php namespace tutor;

class BlackboardController extends \BaseController {

	function __construct()
  {
    $this->beforeFilter('correctBlackboard', array('only' => 
          array('show')));
    $this->beforeFilter('isTutorGroupOwner', array('only' => 
          array('show')));
  }

	/**
	 * Display the specified resource.
	 * GET /blackboard/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($scholar_group_id, $id)
	{
		$blackboard = \Blackboard::find($id);
		$equations = $blackboard->equations;
		return \View::make('tutor.blackboards.show',
			     compact('blackboard','equations'));
	}

}