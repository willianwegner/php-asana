<?php

namespace Asana\Resources\Gen;

class TagsBase {

    /**
     * @param Asana/Client client  The client instance
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /** Create a tag
     *
     * @param $params object
     * @return response
     */
    public function createTag($params = array(), $options = array()) {
        $path = "/tags";
        return $this->client->post($path, $params, $options);
    }

    /** Create a tag in a workspace
     *
     * @param $workspace_gid string:  (required) Globally unique identifier for the workspace or organization.
     * @param $params object
     * @return response
     */
    public function createTagForWorkspace($workspace_gid, $params = array(), $options = array()) {
        $path = "/workspaces/{workspace_gid}/tags";
        $path = str_replace($path,"{workspace_gid}", $workspace_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Get a tag
     *
     * @param $tag_gid string:  (required) Globally unique identifier for the tag.
     * @param $params object
     * @return response
     */
    public function getTag($tag_gid, $params = array(), $options = array()) {
        $path = "/tags/{tag_gid}";
        $path = str_replace($path,"{tag_gid}", $tag_gid);
        return $this->client->get($path, $params, $options);
    }

    /** Get multiple tags
     *
     * @param $params object
     * @return response
     */
    public function getTags($params = array(), $options = array()) {
        $path = "/tags";
        return $this->client->getCollection($path, $params, $options);
    }

    /** Get a task's tags
     *
     * @param $task_gid string:  (required) The task to operate on.
     * @param $params object
     * @return response
     */
    public function getTagsForTask($task_gid, $params = array(), $options = array()) {
        $path = "/tasks/{task_gid}/tags";
        $path = str_replace($path,"{task_gid}", $task_gid);
        return $this->client->getCollection($path, $params, $options);
    }

    /** Get tags in a workspace
     *
     * @param $workspace_gid string:  (required) Globally unique identifier for the workspace or organization.
     * @param $params object
     * @return response
     */
    public function getTagsForWorkspace($workspace_gid, $params = array(), $options = array()) {
        $path = "/workspaces/{workspace_gid}/tags";
        $path = str_replace($path,"{workspace_gid}", $workspace_gid);
        return $this->client->getCollection($path, $params, $options);
    }

    /** Update a tag
     *
     * @param $tag_gid string:  (required) Globally unique identifier for the tag.
     * @param $params object
     * @return response
     */
    public function updateTag($tag_gid, $params = array(), $options = array()) {
        $path = "/tags/{tag_gid}";
        $path = str_replace($path,"{tag_gid}", $tag_gid);
        return $this->client->put($path, $params, $options);
    }
}
