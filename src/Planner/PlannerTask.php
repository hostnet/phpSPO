<?php

/**
 * Modified: 2020-05-26T22:12:31+00:00 
 */
namespace Office365\Planner;

use Office365\Common\IdentitySet;
use Office365\Entity;
use Office365\Runtime\ResourcePath;
/**
 * The **plannerTask** resource represents a Planner task in Office 365. A Planner task is contained in a [plan](plannerplan.md) and can be assigned to a [bucket](plannerbucket.md) in a plan. Each task object has a [details](plannertaskdetails.md) object which can contain more information about the task. See [overview](planner-overview.md) for more information regarding relationships between group, plan and task.
 */
class PlannerTask extends Entity
{
    /**
     * Identity of the user that created the task.
     * @return IdentitySet
     */
    public function getCreatedBy()
    {
        if (!$this->isPropertyAvailable("CreatedBy")) {
            return null;
        }
        return $this->getProperty("CreatedBy");
    }
    /**
     * Identity of the user that created the task.
     * @var IdentitySet
     */
    public function setCreatedBy($value)
    {
        $this->setProperty("CreatedBy", $value, true);
    }
    /**
     * Plan ID to which the task belongs.
     * @return string
     */
    public function getPlanId()
    {
        if (!$this->isPropertyAvailable("PlanId")) {
            return null;
        }
        return $this->getProperty("PlanId");
    }
    /**
     * Plan ID to which the task belongs.
     * @var string
     */
    public function setPlanId($value)
    {
        $this->setProperty("PlanId", $value, true);
    }
    /**
     * Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It is 28 characters long and case-sensitive. [Format validation](planner-identifiers-disclaimer.md) is done on the service. 
     * @return string
     */
    public function getBucketId()
    {
        if (!$this->isPropertyAvailable("BucketId")) {
            return null;
        }
        return $this->getProperty("BucketId");
    }
    /**
     * Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It is 28 characters long and case-sensitive. [Format validation](planner-identifiers-disclaimer.md) is done on the service. 
     * @var string
     */
    public function setBucketId($value)
    {
        $this->setProperty("BucketId", $value, true);
    }
    /**
     * Title of the task.
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * Title of the task.
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * Hint used to order items of this type in a list view. The format is defined as outlined [here](planner-order-hint-format.md).
     * @return string
     */
    public function getOrderHint()
    {
        if (!$this->isPropertyAvailable("OrderHint")) {
            return null;
        }
        return $this->getProperty("OrderHint");
    }
    /**
     * Hint used to order items of this type in a list view. The format is defined as outlined [here](planner-order-hint-format.md).
     * @var string
     */
    public function setOrderHint($value)
    {
        $this->setProperty("OrderHint", $value, true);
    }
    /**
     * Hint used to order items of this type in a list view. The format is defined as outlined [here](planner-order-hint-format.md).
     * @return string
     */
    public function getAssigneePriority()
    {
        if (!$this->isPropertyAvailable("AssigneePriority")) {
            return null;
        }
        return $this->getProperty("AssigneePriority");
    }
    /**
     * Hint used to order items of this type in a list view. The format is defined as outlined [here](planner-order-hint-format.md).
     * @var string
     */
    public function setAssigneePriority($value)
    {
        $this->setProperty("AssigneePriority", $value, true);
    }
    /**
     * Percentage of task completion. When set to `100`, the task is considered completed. 
     * @return integer
     */
    public function getPercentComplete()
    {
        if (!$this->isPropertyAvailable("PercentComplete")) {
            return null;
        }
        return $this->getProperty("PercentComplete");
    }
    /**
     * Percentage of task completion. When set to `100`, the task is considered completed. 
     * @var integer
     */
    public function setPercentComplete($value)
    {
        $this->setProperty("PercentComplete", $value, true);
    }
    /**
     * Read-only. Value is `true` if the details object of the task has a non-empty description and `false` otherwise.
     * @return bool
     */
    public function getHasDescription()
    {
        if (!$this->isPropertyAvailable("HasDescription")) {
            return null;
        }
        return $this->getProperty("HasDescription");
    }
    /**
     * Read-only. Value is `true` if the details object of the task has a non-empty description and `false` otherwise.
     * @var bool
     */
    public function setHasDescription($value)
    {
        $this->setProperty("HasDescription", $value, true);
    }
    /**
     * Identity of the user that completed the task.
     * @return IdentitySet
     */
    public function getCompletedBy()
    {
        if (!$this->isPropertyAvailable("CompletedBy")) {
            return null;
        }
        return $this->getProperty("CompletedBy");
    }
    /**
     * Identity of the user that completed the task.
     * @var IdentitySet
     */
    public function setCompletedBy($value)
    {
        $this->setProperty("CompletedBy", $value, true);
    }
    /**
     * Number of external references that exist on the task.
     * @return integer
     */
    public function getReferenceCount()
    {
        if (!$this->isPropertyAvailable("ReferenceCount")) {
            return null;
        }
        return $this->getProperty("ReferenceCount");
    }
    /**
     * Number of external references that exist on the task.
     * @var integer
     */
    public function setReferenceCount($value)
    {
        $this->setProperty("ReferenceCount", $value, true);
    }
    /**
     * Number of checklist items that are present on the task.
     * @return integer
     */
    public function getChecklistItemCount()
    {
        if (!$this->isPropertyAvailable("ChecklistItemCount")) {
            return null;
        }
        return $this->getProperty("ChecklistItemCount");
    }
    /**
     * Number of checklist items that are present on the task.
     * @var integer
     */
    public function setChecklistItemCount($value)
    {
        $this->setProperty("ChecklistItemCount", $value, true);
    }
    /**
     * Number of checklist items with value set to `false`, representing incomplete items.
     * @return integer
     */
    public function getActiveChecklistItemCount()
    {
        if (!$this->isPropertyAvailable("ActiveChecklistItemCount")) {
            return null;
        }
        return $this->getProperty("ActiveChecklistItemCount");
    }
    /**
     * Number of checklist items with value set to `false`, representing incomplete items.
     * @var integer
     */
    public function setActiveChecklistItemCount($value)
    {
        $this->setProperty("ActiveChecklistItemCount", $value, true);
    }
    /**
     * Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
     * @return string
     */
    public function getConversationThreadId()
    {
        if (!$this->isPropertyAvailable("ConversationThreadId")) {
            return null;
        }
        return $this->getProperty("ConversationThreadId");
    }
    /**
     * Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
     * @var string
     */
    public function setConversationThreadId($value)
    {
        $this->setProperty("ConversationThreadId", $value, true);
    }
    /**
     * The categories to which the task has been applied. See [applied Categories](plannerappliedcategories.md) for possible values.
     * @return PlannerAppliedCategories
     */
    public function getAppliedCategories()
    {
        if (!$this->isPropertyAvailable("AppliedCategories")) {
            return null;
        }
        return $this->getProperty("AppliedCategories");
    }
    /**
     * The categories to which the task has been applied. See [applied Categories](plannerappliedcategories.md) for possible values.
     * @var PlannerAppliedCategories
     */
    public function setAppliedCategories($value)
    {
        $this->setProperty("AppliedCategories", $value, true);
    }
    /**
     * The set of assignees the task is assigned to.
     * @return PlannerAssignments
     */
    public function getAssignments()
    {
        if (!$this->isPropertyAvailable("Assignments")) {
            return null;
        }
        return $this->getProperty("Assignments");
    }
    /**
     * The set of assignees the task is assigned to.
     * @var PlannerAssignments
     */
    public function setAssignments($value)
    {
        $this->setProperty("Assignments", $value, true);
    }
    /**
     *  Read-only. Nullable. Additional details about the task.
     * @return PlannerTaskDetails
     */
    public function getDetails()
    {
        if (!$this->isPropertyAvailable("Details")) {
            $this->setProperty("Details", new PlannerTaskDetails($this->getContext(), new ResourcePath("Details", $this->getResourcePath())));
        }
        return $this->getProperty("Details");
    }
    /**
     *  Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
     * @return PlannerAssignedToTaskBoardTaskFormat
     */
    public function getAssignedToTaskBoardFormat()
    {
        if (!$this->isPropertyAvailable("AssignedToTaskBoardFormat")) {
            $this->setProperty("AssignedToTaskBoardFormat", new PlannerAssignedToTaskBoardTaskFormat($this->getContext(), new ResourcePath("AssignedToTaskBoardFormat", $this->getResourcePath())));
        }
        return $this->getProperty("AssignedToTaskBoardFormat");
    }
    /**
     *  Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
     * @return PlannerProgressTaskBoardTaskFormat
     */
    public function getProgressTaskBoardFormat()
    {
        if (!$this->isPropertyAvailable("ProgressTaskBoardFormat")) {
            $this->setProperty("ProgressTaskBoardFormat", new PlannerProgressTaskBoardTaskFormat($this->getContext(), new ResourcePath("ProgressTaskBoardFormat", $this->getResourcePath())));
        }
        return $this->getProperty("ProgressTaskBoardFormat");
    }
    /**
     *  Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
     * @return PlannerBucketTaskBoardTaskFormat
     */
    public function getBucketTaskBoardFormat()
    {
        if (!$this->isPropertyAvailable("BucketTaskBoardFormat")) {
            $this->setProperty("BucketTaskBoardFormat", new PlannerBucketTaskBoardTaskFormat($this->getContext(), new ResourcePath("BucketTaskBoardFormat", $this->getResourcePath())));
        }
        return $this->getProperty("BucketTaskBoardFormat");
    }
}