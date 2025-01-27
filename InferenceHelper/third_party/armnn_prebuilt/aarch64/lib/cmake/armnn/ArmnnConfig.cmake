
get_filename_component(ARMNN_CMAKE_DIR "${CMAKE_CURRENT_LIST_FILE}" DIRECTORY)
set(ARMNN_CONFIG_FILE ${CMAKE_CURRENT_LIST_FILE})
MESSAGE(STATUS "Found Armnn: ${ARMNN_CONFIG_FILE}")

include(CMakeFindDependencyMacro)

list(APPEND CMAKE_MODULE_PATH ${ARMNN_CMAKE_DIR})

if(NOT TARGET Armnn::Armnn)
    MESSAGE(STATUS "Armnn Import: ${ARMNN_CMAKE_DIR}/ArmnnTargets.cmake")
    include("${ARMNN_CMAKE_DIR}/ArmnnTargets.cmake")
endif()

set(ARMNN_LIBRARIES Armnn::Armnn)
