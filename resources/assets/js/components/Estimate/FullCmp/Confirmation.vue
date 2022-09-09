<template>
    <Screen>
        <Row gutter="1.7rem">
            <Col width="472px">
                <SubmittedInfo :link="autologinLink" />
            </Col>
            <Col>
                <SideBox class="h100">
                    <ToBottomLayout>
                        <InfoBlock
                            icon="/assets/images/estimate-cmp/information-button.png"
                            title="Thank you for choosing Born to Move!"
                            description="Your move request will be processed and we will email you as soon as possible."
                        />
                        <Box style="margin-top: 2.8rem">We strive to send out all estimates within minutes. Please expect an additional day for all weekend requests.</Box>
                        <Box style="margin-top: 2.8rem">In the meantime, you can make changes or check request status in your request page.</Box>

                        <template v-slot:bottom>
                            <Box type="alert">NOTE: Check your junk and spam folders to ensure that you are not missing any emails from us.</Box>
                        </template>
                    </ToBottomLayout>
                </SideBox>
            </Col>
        </Row>
    </Screen>
</template>


<script setup>
import { ref, computed } from 'vue'
import {useGetters} from "@/utils/stateLib"

import Screen from './Blocks/Screen'
import InfoBlock from './Blocks/InfoBlock'
import SubmittedInfo from './Blocks/SubmittedInfo'
import SideBox from './Blocks/SideBox'
import Row from '../Blocks/Grid/Row'
import Col from '../Blocks/Grid/Col'
import Box from './Blocks/Box'
import ToBottomLayout from './Blocks/ToBottomLayout'
import {estimateFullStore} from "@/utils/storePath";

const {autologinLink} = useGetters(estimateFullStore)
</script>
