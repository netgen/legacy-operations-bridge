<?php

/**
 * Override for eZContentOperationCollection, relying on eZContentOperationsCollectionBase
 * as base for override.
 *
 * @see \eZContentOperationCollectionBase
 */
class eZContentOperationCollection
{
    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::readNode()
     */
    public static function readNode( $nodeID )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::readNode( $nodeID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::readObject()
     */
    public static function readObject( $nodeID, $userID, $languageCode )
    {
        return eZContentOperationCollectionBase::readObject( $nodeID, $userID, $languageCode );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::loopNodes()
     */
    public static function loopNodes( $nodeID )
    {
        return eZContentOperationCollectionBase::loopNodes( $nodeID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::loopNodeAssignment()
     */
    public static function loopNodeAssignment( $objectID, $versionNum )
    {
        return eZContentOperationCollectionBase::loopNodeAssignment( $objectID, $versionNum );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::publishObjectExtensionHandler()
     */
    public static function publishObjectExtensionHandler( $contentObjectID, $contentObjectVersion )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::publishObjectExtensionHandler( $contentObjectID, $contentObjectVersion );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::beginTransaction()
     */
    public static function beginTransaction()
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::beginTransaction();
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::commitTransaction()
     */
    public static function commitTransaction()
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::commitTransaction();
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::setVersionStatus()
     */
    public static function setVersionStatus( $objectID, $versionNum, $status )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::setVersionStatus( $objectID, $versionNum, $status );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::setObjectStatusPublished()
     */
    public static function setObjectStatusPublished( $objectID, $versionNum )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::setObjectStatusPublished( $objectID, $versionNum );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::attributePublishAction()
     */
    public static function attributePublishAction( $objectID, $versionNum )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::attributePublishAction( $objectID, $versionNum );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::generateObjectViewCache()
     */
    public static function generateObjectViewCache( $objectID )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::generateObjectViewCache( $objectID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::clearObjectViewCache()
     */
    public static function clearObjectViewCache( $objectID, $versionNum = true, $additionalNodeList = false )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::clearObjectViewCache( $objectID, $versionNum, $additionalNodeList );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::publishNode()
     */
    public static function publishNode( $parentNodeID, $objectID, $versionNum, $mainNodeID )
    {
        return eZContentOperationCollectionBase::publishNode( $parentNodeID, $objectID, $versionNum, $mainNodeID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::updateSectionID()
     */
    public static function updateSectionID( $objectID, $versionNum )
    {
        return eZContentOperationCollectionBase::updateSectionID( $objectID, $versionNum );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::removeOldNodes()
     */
    public static function removeOldNodes( $objectID, $versionNum )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::removeOldNodes( $objectID, $versionNum );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::resetNodeassignmentOpcodes()
     */
    public static function resetNodeassignmentOpcodes( $objectID, $versionNum )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::resetNodeassignmentOpcodes( $objectID, $versionNum );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::registerSearchObject()
     */
    public static function registerSearchObject( $objectID, $version = null, $isMoved = false )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::registerSearchObject( $objectID, $version, $isMoved );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::createNotificationEvent()
     */
    public static function createNotificationEvent( $objectID, $versionNum )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::createNotificationEvent( $objectID, $versionNum );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::copyTranslations()
     */
    public static function copyTranslations( $objectID, $versionNum )
    {
        return eZContentOperationCollectionBase::copyTranslations( $objectID, $versionNum );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::updateNontranslatableAttributes()
     */
    public static function updateNontranslatableAttributes( $objectID, $versionNum )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::updateNontranslatableAttributes( $objectID, $versionNum );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::removeTemporaryDrafts()
     */
    public static function removeTemporaryDrafts( $objectID, $versionNum )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::removeTemporaryDrafts( $objectID, $versionNum );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::moveNode()
     */
    public static function moveNode( $nodeID, $objectID, $newParentNodeID )
    {
        return eZContentOperationCollectionBase::moveNode( $nodeID, $objectID, $newParentNodeID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::addAssignment()
     *
     * @throws \RuntimeException
     * @throws \Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException
     * @throws \Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException
     * @throws \LogicException
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException
     * @throws \eZ\Publish\API\Repository\Exceptions\UnauthorizedException
     *
     * @param int $locationId
     * @param int $contentId
     * @param array $parentLocationIds
     *
     * @return array An array with operation status, always true
     */
    public static function addAssignment( $locationId, $contentId, $parentLocationIds )
    {
        if ( !static::canBridgeOperation( 'AddAssignmentOperation' ) ) {
            return eZContentOperationCollectionBase::addAssignment( $locationId, $contentId, $parentLocationIds );
        }

        $userClassIDArray = eZUser::contentClassIDs();
        $object = eZContentObject::fetch( $contentId );
        $class = $object->contentClass();
        $nodeAssignmentList = eZNodeAssignment::fetchForObject( $contentId, $object->attribute( 'current_version' ), 0, false );
        $assignedNodes = $object->assignedNodes();
        $parentNodeIDArray = array();

        foreach ( $assignedNodes as $assignedNode )
        {
            $append = false;
            foreach ( $nodeAssignmentList as $nodeAssignment )
            {
                if ( $nodeAssignment['parent_node'] == $assignedNode->attribute( 'parent_node_id' ) )
                {
                    $append = true;
                    break;
                }
            }

            if ( $append )
            {
                $parentNodeIDArray[] = $assignedNode->attribute( 'parent_node_id' );
            }
        }

        $node = eZContentObjectTreeNode::fetch( $locationId );
        $locationAdded = false;

        /** @var \Symfony\Component\DependencyInjection\ContainerInterface $serviceContainer */
        $serviceContainer = ezpKernel::instance()->getServiceContainer();
        /** @var \eZ\Publish\API\Repository\Repository $repository */
        $repository = $serviceContainer->get( 'ezpublish.api.repository' );
        $contentService = $repository->getContentService();
        $locationService = $repository->getLocationService();
        $contentInfo = $contentService->loadContentInfo( $contentId );
        $repository->beginTransaction();

        try {
            foreach ( $parentLocationIds as $parentLocationId )
            {
                if ( !in_array( $parentLocationId, $parentNodeIDArray ) )
                {
                    $parentNode = eZContentObjectTreeNode::fetch( $parentLocationId );
                    $parentNodeObject = $parentNode->attribute( 'object' );

                    $canCreate = ( ( $parentNode->checkAccess( 'create', $class->attribute( 'id' ), $parentNodeObject->attribute( 'contentclass_id' ) ) == 1 ) ||
                        ( $parentNode->canAddLocation() && $node->canRead() ) );

                    if ( $canCreate )
                    {
                        $locationCreateStruct = $locationService->newLocationCreateStruct( $parentLocationId );
                        $locationService->createLocation( $contentInfo, $locationCreateStruct );

                        $locationAdded = true;
                    }
                }
            }

            $repository->commit();
        }
        catch ( \Exception $e )
        {
            $repository->rollback();
            $locationAdded = false;
        }

        if ( $locationAdded )
        {
            // clear user policy cache if this was a user object
            if ( in_array( $object->attribute( 'contentclass_id' ), $userClassIDArray ) )
            {
                eZUser::purgeUserCacheByUserId( $object->attribute( 'id' ) );
            }

            eZContentCacheManager::clearContentCacheIfNeeded( $contentId );
        }

        return array( 'status' => true );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::removeNodes()
     */
    public static function removeNodes( array $removeNodeIdList )
    {
        return eZContentOperationCollectionBase::removeNodes( $removeNodeIdList );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::deleteObject()
     */
    public static function deleteObject( $deleteIDArray, $moveToTrash = false )
    {
        return eZContentOperationCollectionBase::deleteObject( $deleteIDArray, $moveToTrash );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::changeHideStatus()
     */
    public static function changeHideStatus( $nodeID )
    {
        return eZContentOperationCollectionBase::changeHideStatus( $nodeID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::swapNode()
     */
    public static function swapNode( $nodeID, $selectedNodeID, $nodeIdList = array() )
    {
        return eZContentOperationCollectionBase::swapNode( $nodeID, $selectedNodeID, $nodeIdList );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::updateSection()
     */
    public static function updateSection( $nodeID, $selectedSectionID )
    {
        return eZContentOperationCollectionBase::updateSection( $nodeID, $selectedSectionID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::changeTranslationAvailableStatus()
     */
    public static function changeTranslationAvailableStatus( $objectID, $status = false )
    {
        return eZContentOperationCollectionBase::changeTranslationAvailableStatus( $objectID, $status );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::changeSortOrder()
     */
    public static function changeSortOrder( $nodeID, $sortingField, $sortingOrder = false )
    {
        return eZContentOperationCollectionBase::changeSortOrder( $nodeID, $sortingField, $sortingOrder );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::updatePriority()
     */
    public static function updatePriority( $parentNodeID, $priorityArray = array(), $priorityIDArray = array() )
    {
        return eZContentOperationCollectionBase::updatePriority( $parentNodeID, $priorityArray, $priorityIDArray );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::updateMainAssignment()
     */
    public static function updateMainAssignment( $mainAssignmentID, $ObjectID, $mainAssignmentParentID )
    {
        return eZContentOperationCollectionBase::updateMainAssignment( $mainAssignmentID, $ObjectID, $mainAssignmentParentID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::updateInitialLanguage()
     */
    public static function updateInitialLanguage( $objectID, $newInitialLanguageID )
    {
        return eZContentOperationCollectionBase::updateInitialLanguage( $objectID, $newInitialLanguageID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::updateAlwaysAvailable()
     */
    public static function updateAlwaysAvailable( $objectID, $newAlwaysAvailable )
    {
        return eZContentOperationCollectionBase::updateAlwaysAvailable( $objectID, $newAlwaysAvailable );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::removeTranslation()
     */
    public static function removeTranslation( $objectID, $languageIDArray )
    {
        return eZContentOperationCollectionBase::removeTranslation( $objectID, $languageIDArray );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::updateObjectState()
     */
    public static function updateObjectState( $objectID, $selectedStateIDList )
    {
        return eZContentOperationCollectionBase::updateObjectState( $objectID, $selectedStateIDList );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::executePrePublishTrigger()
     */
    public static function executePrePublishTrigger( $objectID, $version )
    {
        /** @noinspection PhpVoidFunctionResultUsedInspection */
        return eZContentOperationCollectionBase::executePrePublishTrigger( $objectID, $version );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::createFeedForNode()
     */
    public static function createFeedForNode( $nodeID )
    {
        return eZContentOperationCollectionBase::createFeedForNode( $nodeID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::removeFeedForNode()
     */
    public static function removeFeedForNode( $nodeID )
    {
        return eZContentOperationCollectionBase::removeFeedForNode( $nodeID );
    }

    /**
     * @inheritdoc
     * @see \Netgen\Bundle\LegacyOperationsBridgeBundle\EzContentOperationsCollection::sendToPublishingQueue()
     */
    public static function sendToPublishingQueue( $objectId, $version )
    {
        return eZContentOperationCollectionBase::sendToPublishingQueue( $objectId, $version );
    }

    /**
     * Check if the given $operation is configured to be bridged to eZ Platform.
     *
     * @param string $operation
     *
     * @return bool
     */
    private static function canBridgeOperation( $operation )
    {
        $ini = eZINI::instance( 'ngoperationsbridge.ini' );

        $enabled = $ini->variable( 'GeneralSettings', 'Enabled' );

        if ( 'true' !== $enabled ) {
            return false;
        }

        $bridgeEverything = $ini->variable( 'GeneralSettings', 'BridgeEverything' );

        if ( 'true' === $bridgeEverything ) {
            return true;
        }

        $operationActivated = $ini->variable( 'ActivationSettings', $operation );

        return 'true' === $operationActivated;
    }
}
