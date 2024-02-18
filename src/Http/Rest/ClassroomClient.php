<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class ClassroomClient extends AbstractClient
{
    /**
     * Get an assignment.
     *
     * @link https://docs.github.com/rest/classroom/classroom#get-an-assignment
     */
    public function getAnAssignment(int $assignment_id): Response
    {
        return $this->get(
            route: '/assignments/{assignment_id}',
            replace: ['assignment_id' => $assignment_id]
        );
    }

    /**
     * List accepted assignments for an assignment.
     *
     * @link https://docs.github.com/rest/classroom/classroom#list-accepted-assignments-for-an-assignment
     */
    public function listAcceptedAssignmentsForAnAssignment(
        int $assignment_id,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/assignments/{assignment_id}/accepted_assignments',
            replace: ['assignment_id' => $assignment_id, 'page' => $page, 'per_page' => $per_page]
        );
    }

    /**
     * Get assignment grades.
     *
     * @link https://docs.github.com/rest/classroom/classroom#get-assignment-grades
     */
    public function getAssignmentGrades(int $assignment_id): Response
    {
        return $this->get(
            route: '/assignments/{assignment_id}/grades',
            replace: ['assignment_id' => $assignment_id]
        );
    }

    /**
     * List classrooms.
     *
     * @link https://docs.github.com/rest/classroom/classroom#list-classrooms
     */
    public function listClassrooms(int $page = null, int $per_page = 100): Response
    {
        return $this->get(
            route: '/classrooms',
            replace: ['page' => $page, 'per_page' => $per_page]
        );
    }

    /**
     * Get a classroom.
     *
     * @link https://docs.github.com/rest/classroom/classroom#get-a-classroom
     */
    public function getAClassroom(int $classroom_id): Response
    {
        return $this->get(
            route: '/classrooms/{classroom_id}',
            replace: ['classroom_id' => $classroom_id]
        );
    }

    /**
     * List assignments for a classroom.
     *
     * @link https://docs.github.com/rest/classroom/classroom#list-assignments-for-a-classroom
     */
    public function listAssignmentsForAClassroom(int $classroom_id, int $page = null, int $per_page = 100): Response
    {
        return $this->get(
            route: '/classrooms/{classroom_id}/assignments',
            replace: ['classroom_id' => $classroom_id, 'page' => $page, 'per_page' => $per_page]
        );
    }
}
