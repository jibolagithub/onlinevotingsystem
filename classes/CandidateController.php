<?php
include_once $classes_redirect."Candidate.php";

class CandidateController extends Candidates {

    public function add_candidate($first_name, $last_name, $department, $telephone, $Content){

        return $this->add_candidate_db($first_name, $last_name, $department, $telephone, $Content);

    }
}