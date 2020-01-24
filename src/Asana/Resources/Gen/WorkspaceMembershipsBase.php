<?php

namespace Asana\Resources\Gen;

class WorkspaceMembershipsBase {

    /**
     * @param Asana/Client client  The client instance
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /** Get a workspace membership
     *
     * @param $workspace_membership_path_gid string:  (required)
     * @param $params object
     * @return response
     */
    public function getWorkspaceMembership($workspace_membership_path_gid, $params = array(), $options = array()) {
        $path = "/workspace_memberships/{workspace_membership_gid}";
        $path = str_replace($path,"{workspace_membership_path_gid}", $workspace_membership_path_gid);
        return $this->client->get($path, $params, $options);
    }

    /** Get workspace memberships for a user
     *
     * @param $user_gid string:  (required) Globally unique identifier for the user.
     * @param $params object
     * @return response
     */
    public function getWorkspaceMembershipsForUser($user_gid, $params = array(), $options = array()) {
        $path = "/users/{user_gid}/workspace_memberships";
        $path = str_replace($path,"{user_gid}", $user_gid);
        return $this->client->getCollection($path, $params, $options);
    }

    /** Get the workspace memberships for a workspace
     *
     * @param $workspace_gid string:  (required) Globally unique identifier for the workspace or organization.
     * @param $params object
     * @return response
     */
    public function getWorkspaceMembershipsForWorkspace($workspace_gid, $params = array(), $options = array()) {
        $path = "/workspaces/{workspace_gid}/workspace_memberships";
        $path = str_replace($path,"{workspace_gid}", $workspace_gid);
        return $this->client->getCollection($path, $params, $options);
    }
}