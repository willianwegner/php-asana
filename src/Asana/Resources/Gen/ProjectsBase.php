<?php

namespace Asana\Resources\Gen;

class ProjectsBase {

    /**
     * @param Asana/Client client  The client instance
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /** Add a custom field to a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function addCustomFieldSettingForProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}/addCustomFieldSetting";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Add users to a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function addFollowersForProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}/addFollowers";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Add users to a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function addMembersForProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}/addMembers";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Create a project
     *
     * @param $params object
     * @return response
     */
    public function createProject($params = array(), $options = array()) {
        $path = "/projects";
        return $this->client->post($path, $params, $options);
    }

    /** Create a project in a team
     *
     * @param $team_gid string:  (required) Globally unique identifier for the team.
     * @param $params object
     * @return response
     */
    public function createProjectForTeam($team_gid, $params = array(), $options = array()) {
        $path = "/teams/{team_gid}/projects";
        $path = str_replace($path,"{team_gid}", $team_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Create a project in a workspace
     *
     * @param $workspace_gid string:  (required) Globally unique identifier for the workspace or organization.
     * @param $params object
     * @return response
     */
    public function createProjectForWorkspace($workspace_gid, $params = array(), $options = array()) {
        $path = "/workspaces/{workspace_gid}/projects";
        $path = str_replace($path,"{workspace_gid}", $workspace_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Delete a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function deleteProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->delete($path, $params, $options);
    }

    /** Duplicate a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function duplicateProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}/duplicate";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Get a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function getProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->get($path, $params, $options);
    }

    /** Get multiple projects
     *
     * @param $params object
     * @return response
     */
    public function getProjects($params = array(), $options = array()) {
        $path = "/projects";
        return $this->client->getCollection($path, $params, $options);
    }

    /** Get projects a task is in
     *
     * @param $task_gid string:  (required) The task to operate on.
     * @param $params object
     * @return response
     */
    public function getProjectsForTask($task_gid, $params = array(), $options = array()) {
        $path = "/tasks/{task_gid}/projects";
        $path = str_replace($path,"{task_gid}", $task_gid);
        return $this->client->getCollection($path, $params, $options);
    }

    /** Get a team's projects
     *
     * @param $team_gid string:  (required) Globally unique identifier for the team.
     * @param $params object
     * @return response
     */
    public function getProjectsForTeam($team_gid, $params = array(), $options = array()) {
        $path = "/teams/{team_gid}/projects";
        $path = str_replace($path,"{team_gid}", $team_gid);
        return $this->client->getCollection($path, $params, $options);
    }

    /** Get all projects in a workspace
     *
     * @param $workspace_gid string:  (required) Globally unique identifier for the workspace or organization.
     * @param $params object
     * @return response
     */
    public function getProjectsForWorkspace($workspace_gid, $params = array(), $options = array()) {
        $path = "/workspaces/{workspace_gid}/projects";
        $path = str_replace($path,"{workspace_gid}", $workspace_gid);
        return $this->client->getCollection($path, $params, $options);
    }

    /** Get task count of a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function getTaskCountsForProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}/task_counts";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->get($path, $params, $options);
    }

    /** Remove a custom field from a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function removeCustomFieldSettingForProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}/removeCustomFieldSetting";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Remove followers from a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function removeFollowersForProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}/removeFollowers";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Remove users from a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function removeMembersForProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}/removeMembers";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Update a project
     *
     * @param $project_gid string:  (required) Globally unique identifier for the project.
     * @param $params object
     * @return response
     */
    public function updateProject($project_gid, $params = array(), $options = array()) {
        $path = "/projects/{project_gid}";
        $path = str_replace($path,"{project_gid}", $project_gid);
        return $this->client->put($path, $params, $options);
    }
}
